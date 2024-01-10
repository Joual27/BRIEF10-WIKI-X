<?php




class Author extends Controller{
    public function wikis(){
        $data = [
            "role" => $_SESSION["roleName"]
        ];
       $this->view("author/index",$data);
    }
}


?>