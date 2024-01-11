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

    public function getAllTags(){
      $tagService = new TagServiceImp();
      try{
        $tags = $tagService->getAllTags();
        echo json_encode($tags);
      }
      catch(PDOException $e){
       die($e->getMessage());
      }
    }

    public function addTag(){
      if(isset($_POST["add"])){
        $id = uniqid();
        $tagName = $_POST["name"];

        $tagToAdd = new Tag();
        $tagToAdd->tagId = $id;
        $tagToAdd->tagName = $tagName;

        $tagService = new TagServiceImp();
        try{
            $tagService->addTag($tagToAdd);
            $tags = $tagService->getAllTags();
            echo json_encode($tags);
        }
        catch(PDOException $e){
          die($e->getMessage());
         }

      }
    }

    public function updateTag(){
      if(isset($_POST["edit"])){
        $tagId = $_POST["id"];
        $tagName = $_POST["name"];

        $tagToUpdate = new Tag();
        $tagToUpdate->tagId = $tagId;
        $tagToUpdate->tagName = $tagName;
        $tagService = new TagServiceImp();
        
          try{
            $tagService->updateTag($tagToUpdate);
            $tags = $tagService->getAllTags();
            echo json_encode($tags);
        }
        catch(PDOException $e){
           die($e->getMessage());
         }


      }
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