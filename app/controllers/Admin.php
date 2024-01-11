<?php




class Admin extends Controller{
    public function wikis(){
       $securityService = new SecurityServiceImp();
       $securityService->checkForAdmin();
       $data = [
         "page" => "wikis"
       ];
       $this->view("admin/wikis",$data);
    }

    public function tags(){
      $securityService = new SecurityServiceImp();
      $securityService->checkForAdmin();
      $data = [
        "page" => "tags"
      ];
      $this->view("admin/tags",$data);

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
       if(isset($_POST["delete"])){
         $wikiId = $_POST["id"];
         $wikiService = new WikiServiceImp();
         try{
           $wikiService->deleteWiki($wikiId);
           $wikis = $wikiService->getAllWikis();
           echo json_encode($wikis);
         }
         catch(PDOException $e){
          die($e->getMessage());
         }
       }
    }

}


?>