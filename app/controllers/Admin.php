<?php




class Admin extends Controller{
    public function wikis(){
       $data = [
         "role" => $_SESSION["roleName"]
       ];
       $this->view("admin/index",$data);

    }
}


?>