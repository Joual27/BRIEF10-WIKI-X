<?php

    class Pages extends Controller{
        public $userModel;
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

            if (!isset($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = trim(bin2hex(random_bytes(32)));
            }

            

            if(isset($_POST["add"])){
                var_dump($_SESSION['csrf_token']);
                var_dump($_POST['csrf_token']);
                if (!isset($_POST['csrf_token']) || !hash_equals($_POST['csrf_token'], $_SESSION['csrf_token'])) {
                    echo json_encode($_SESSION['csrf_token']);
                }
                else{
                    $userId = uniqid();
                    $username = $_POST["username"];
                    $pw = $_POST["pw"];
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
                        echo json_encode("success");
                    }
                    catch(PDOException $e){
                        die($e->getMessage());
                    }
                }
            }
            $this->view("pages/register");
        }
        public function login(){
            $this->view("pages/login");
        }


    }