<?php

class RoleOfUserServiceImp implements RoleOfUserServiceI{

    private Database $db ;
    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function addRoleOfUser(RoleOfUser $ROU){
        $addROUQuery = "INSERT INTO roleofuser VALUES (:userId , :roleName)";
        $this->db->query($addROUQuery);
        $this->db->bind(":userId", $ROU->user->userId);
        $this->db->bind(":roleName",$ROU->role->getRoleName());
        try{
            $this->db->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}


?>