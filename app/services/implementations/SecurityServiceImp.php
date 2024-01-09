<?php


class SecurityServiceImp implements SecurityServiceI{
    private Database $db ;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function login(AppUser $user){
        // $loginQuery = "SELECT * FROM appuser WHERE email = :email AND pw = :pw";
        // $this->db->query($loginQuery);
        // $this->db->bind(":email",$user->email);
        // $this->db->bind(":pw",$user->password);
        // try{
        //     $this->db->execute();
        // }

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
}


?>