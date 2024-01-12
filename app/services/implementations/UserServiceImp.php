<?php




class UserServiceImp implements UserServiceI{

    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function getAllAuthors(){
        $fetchAuthorsQuery = "SELECT * FROM appuser JOIN roleofUser ON appuser.userId = roleofuser.userId WHERE roleofuser.roleName = 'author'" ;
        $this->db->query($fetchAuthorsQuery);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function affectNewAdmin($userId){
        $setAdminRoleQuery = "UPDATE roleofuser SET roleName = 'admin' WHERE userId = :userId";
        $this->db->query($setAdminRoleQuery);
        $this->db->bind(":userId",$userId);
        try{
            $this->db->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
}


?>