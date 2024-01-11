<?php




class Admin extends Controller{
    public function wikis(){
       $securityService = new SecurityServiceImp();
       $securityService->checkForAdmin();
       $this->view("admin/wikis");
    }

    public function getAllWikis(){
      $wikiService = new WikiServiceImp();
      try{
        $wikis = $wikiService->getAllWikis();
        echo json_encode($wikis);
      }
      catch(PDOException $e){
       die($e->getMessage());
      }
    }

    public function deleteWiki(){
      
    }

}


?>