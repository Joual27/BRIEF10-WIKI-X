<?php




class Admin extends Controller{
    public function wikis(){
       $securityService = new SecurityServiceImp();
       $securityService->checkForAdmin();
       $data = [
         "role" => $_SESSION["roleName"]
       ];
       $this->view("admin/wikis",$data);
    }
}


?>