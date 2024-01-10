<?php


class Role{
    private $roleName ;

    public function __construct(){

    }

    public function getRoleName(){
        return $this->roleName;
    }
    public function setRoleName($roleName){
        $this->roleName = $roleName ;
        
    }
}

?>