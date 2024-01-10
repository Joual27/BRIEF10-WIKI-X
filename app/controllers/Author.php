<?php


class Author extends Controller{
    public function wikis(){
        $securityService = new SecurityServiceImp();
        $securityService->checkForAuthor();
        $data = [
            "role" => $_SESSION["roleName"]
        ];
       $this->view("author/index",$data);
    }
}


?>