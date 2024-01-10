<?php


class SecurityServiceImp implements SecurityServiceI{
    private Database $db ;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function login(AppUser $user){
        $loginQuery = "SELECT * FROM appuser WHERE email = :email";
        $this->db->query($loginQuery);
        $this->db->bind(":email", $user->email);
    
        try {
            $userData = $this->db->fetchOneRow();
            if ($userData && password_verify($user->password, $userData->pw)){
                return $userData;
            }
            return null; 
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function register(AppUser $user){
        $registerQuery = "INSERT INTO appuser VALUES (:userId , :username , :pw , :email , :img , NOW())" ;
        $this->db->query($registerQuery);
        $this->db->bind(":userId", $user->userId);
        $this->db->bind(":username", $user->username);
        $this->db->bind(":pw", $user->password);
        $this->db->bind(":email", $user->email);
        $this->db->bind(":img", "profile.png");
        try{
            $this->db->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function checkForRole($userId){
        $checkQuery = "SELECT * FROM roleOfUser WHERE userId = :userId";
        $this->db->query($checkQuery);
        $this->db->bind(":userId",$userId);
        try{
            return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function checkForAdmin(){
        if(empty($_SESSION["roleName"])){
            header("Location:".URLROOT);
        }
        else if($_SESSION["roleName"] == "author"){
            header("Location:".URLROOT."author/wikis");
        }
    }
    public function checkForAuthor(){
        if(empty($_SESSION["roleName"])){
            header("Location:".URLROOT);
        }
        else if($_SESSION["roleName"] == "admin"){
            header("Location:".URLROOT."admin/wikis");
        }
    }

}


?>