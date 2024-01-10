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
                    $pw = password_hash($_POST["pw"],PASSWORD_DEFAULT);
                    $email = $_POST["email"];

                    $userToAdd = new AppUser();
                    $userToAdd->userId = $userId ;
                    $userToAdd->username = $username ;
                    $userToAdd->password = $pw ;
                    $userToAdd->email = $email ;
                    
                    $roleOfUser = new RoleOfUser();
                    $roleOfUser->user = $userToAdd ;
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
            
            if(!isset($_SESSION["login_token"])){
                $_SESSION["login_token"] = trim(bin2hex(random_bytes(32)));
            }
            
            if(isset($_POST["login"])){
                if(!isset($_SESSION["login_token"]) || !hash_equals($_SESSION["login_token"],$_POST["token"])){
                    echo json_encode("INVALID TOKEN CSRF TRY AGAIN");
                }
                else{
                   $email = $_POST["email"];
                   $pw = $_POST["pw"];

                   $loggingUser = new AppUser();
                   $loggingUser->email = $email;
                   $loggingUser->password = $pw;
                   
                   $securityService = new SecurityServiceImp();

                   try{
                      $loggingUserData = $securityService->login($loggingUser);
                      if($loggingUserData){
                         $role = $securityService->checkForRole($loggingUserData->userId);
                         if($role == "author"){
                            echo json_encode("author");
                         }
                         else{
                            echo json_encode("author");
                         }
                      }
                      else {
                        echo json_encode("err");         
                      }
                   }
                   catch(PDOException $e){
                    die($e->getMessage());
                }

                }
            }
            

        }


    }