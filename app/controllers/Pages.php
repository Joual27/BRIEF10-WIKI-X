<?php

    class Pages extends Controller{
        public function __construct()
        {

        }
        public function index() {
            $data = [
                'title' => 'You Welcomee to Our Website',
            ];
            $this->view('pages/index' , $data );
        }


        public function register(){
            
            $this->view("pages/register");

            if (!isset($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = trim(bin2hex(random_bytes(32)));
            }

            if(isset($_POST["add"])){
                if (!isset($_POST['csrf_token']) || !hash_equals($_POST['csrf_token'], $_SESSION['csrf_token'])) {
                    echo json_encode("invalid crsf token !");
                }
                else{
                    $userId = uniqid();
                    $username = $_POST["username"];
                    $pw = password_hash($_POST["pw"],PASSWORD_BCRYPT);
                    $email = $_POST["email"];

                    $userToAdd = new AppUser();
                    $userToAdd->userId = $userId ;
                    $userToAdd->username = $username ;
                    $userToAdd->password = $pw ;
                    $userToAdd->email = $email ;

                    $role = new Role();
                    $role->setRoleName("author");
                    
                    $roleOfUser = new RoleOfUser();
                    $roleOfUser->user = $userToAdd ;
                    $roleOfUser->role = $role;
                    $securityService = new SecurityServiceImp();
                    $roleOfUserService = new RoleOfUserServiceImp();
                    try{
                        $securityService->register($userToAdd);
                        $roleOfUserService->addRoleOfUser($roleOfUser); 
                        // header("Location:". URLROOT ."/pages/login"); 
                        echo json_encode("success");
                    }
                    catch(PDOException $e){
                        die($e->getMessage());
                    }
                }
            }

        }
        public function login(){
            $this->view("pages/login");
            if(!isset($_SESSION["login_token"])) {
                $_SESSION["login_token"] = trim(bin2hex(random_bytes(32)));
            }
            if (isset($_POST["login"])) {
                // var_dump($_SESSION["login_token"]);
                // echo "<br>";
                // var_dump($_POST["token"]);
                if (!isset($_SESSION["login_token"]) || !hash_equals($_SESSION["login_token"],$_POST["token"])) {
                    echo json_encode("INVALID TOKEN CSRF TRY AGAIN");
                } else {
                    $email = $_POST["email"];
                    $pw = $_POST["pw"];
        
                    $loggingUser = new AppUser();
                    $loggingUser->email = $email;
                    $loggingUser->password = $pw; 
        
                    $securityService = new SecurityServiceImp();
        
                    try {
                        $loggingUserData = $securityService->login($loggingUser);
                        if ($loggingUserData) {
                                $_SESSION["username"] = $loggingUserData->username;
                                $_SESSION["userId"] = $loggingUserData->userId;
                                $_SESSION["userImg"] = $loggingUserData->userImg;
                                $role = $securityService->checkForRole($loggingUserData->userId);
        
                                if ($role->roleName == "author") {
                                    $_SESSION["roleName"] = "author";
                                    echo json_encode("author");
                                } else {
                                    $_SESSION["roleName"] = "admin";
                                    echo json_encode("admin");
                                }
                            
                        } else {
                            echo json_encode("err");
                        }
                    } catch (PDOException $e) {
                        die($e->getMessage());
                    }
                }
            }
        }

        public function logout(){
            session_destroy();
            header("Location:".URLROOT);
        }
        
        


    }