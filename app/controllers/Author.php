<?php


class Author extends Controller{
    public function wikis(){
        // $securityService = new SecurityServiceImp();
        // $securityService->checkForAuthor();
        // $data = [
        //     "role" => $_SESSION["roleName"]
        // ];
       
     

       $this->view("author/index");
    }

    public function wiki(){
        $id = $_GET["id"];
        $wikiService = new WikiServiceImp();
        $wikiData = $wikiService->wikiInfo($id); 
        $tagsOfWikiService = new TagsOfWikiServiceImp();
        $wiki = new Wiki();
        $wiki->wikiId = $id;
        $tagsOfWiki = $tagsOfWikiService->getAllTagsOfWiki($wiki);
        $data =[
            "wikiInfo" => $wikiData,
            "tagsOfWiki" => $tagsOfWiki
         ];            

        $this->view("author/wiki",$data);
    }


    public function search(){
        if(isset($_POST["search"])){
         $term = $_POST["term"];
         $wikiService = new WikiServiceImp();
         try{
            $result = $wikiService->search($term);
            echo json_encode($result);
         }
         catch(PDOException $e){
            die($e->getMessage());
        }
        }
        else{
            echo json_encode("empty");

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

    public function getAllTagsOfWiki(){
        if(isset($_POST["fetch"])){
            $id = $_POST["id"];

            $wiki = new Wiki();
            $wiki->wikiId = $id;

            $tagsOfWikiService = new TagsOfWikiServiceImp();
            try{
                $tagsOfWiki = $tagsOfWikiService->getAllTagsOfWiki($wiki);
                echo json_encode($tagsOfWiki);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }

    public function getAllCategories(){
        $categoryService = new CategoryServiceImp();
        try{
            $categories = $categoryService->getAllCategories();
            echo json_encode($categories);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function postWiki(){
        $securityService = new SecurityServiceImp();
        $securityService->checkForAuthor();
        $this->view("author/postWiki");
    }



    public function addWiki(){
        if(isset($_POST["add"])){
            $wikiId = uniqid();
            $title = $_POST["title"]; 
            $content = $_POST["content"];     
            $userId = $_SESSION["userId"];
            $categoryId = $_POST["categoryId"];
            $user = new AppUser();
            $user->userId = $userId;
            $category = new Category();
            $category->categoryId = $categoryId;
            $wiki = new Wiki();
            $wiki->wikiId = $wikiId;
            $wiki->title = $title ;
            $wiki->content = $content;
            $wiki->user = $user;
            $wiki->category = $category;                    
            $wikiService = new WikiServiceImp();
            try{
                $wikiService->addWiki($wiki);
                $tagsOfWikiService = new TagsOfWikiServiceImp();
                foreach($_POST["tags"] as $tagId){
                    $tag = new Tag();
                    $tag->tagId = $tagId;
                    $tagsOfWikiService->addTagsOfWiki($wiki,$tag);
                }   
                echo json_encode("done");
            }    
            catch(PDOException $e){
                die($e->getMessage());
            }                
        }
                        
    }


    public function getAllWikisOfAuthor(){
        $wikiService = new WikiServiceImp();
        try{
            $wikis = $wikiService->getAllWikisOfAuthor($_SESSION["userId"]);
            echo json_encode($wikis);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function editWiki(){
        
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $wikiId = $_GET["id"];
            $_SESSION["wiki"] = $wikiId;
            $securityService = new SecurityServiceImp();
            $securityService->checkForAuthor();
    
            $categoryService = new CategoryServiceImp(); 
            $tagService = new TagServiceImp(); 
    
            $tagsOfWikiService = new TagsOfWikiServiceImp();
            $wiki = new Wiki();
            $wiki->wikiId = $wikiId;
            $wikiService = new WikiServiceImp();
            $currentWiki = $wikiService->getWikiById($wikiId);
    
    
            $tow = $tagsOfWikiService->getAllTagsOfWiki($wiki);
    
            $categories = $categoryService->getAllCategories();
            $tags = $tagService->getAllTags();
    
            $data =[
                "categories" => $categories,
                "tags" => $tags ,
                "tagsOfWiki" => $tow,
                "currentWiki" => $currentWiki
            ];
        }

        if(isset($_POST["update"])){
            $title = $_POST["title"]; 
            $content = $_POST["content"];     
            $categoryId = $_POST["categoryId"];
            
            $category = new Category();
            $category->categoryId = $categoryId;
            $wiki = new Wiki();
            $wiki->wikiId = $_SESSION["wiki"];
            $wiki->title = $title ;
            $wiki->content = $content;
            $wiki->category = $category;                    
            $wikiService = new WikiServiceImp();
            try{
                $wikiService->updateWiki($wiki);
                $tagsOfWikiService = new TagsOfWikiServiceImp();
                $tagsOfWikiService->deleteAllTagsOfWiki($_SESSION["wiki"]);
                foreach($_POST["tags"] as $tagId){
                    $tag = new Tag();
                    $tag->tagId = $tagId;
                    $tagsOfWikiService->addTagsOfWiki($wiki,$tag);
                }   
                echo json_encode("done");
            }    
            catch(PDOException $e){
                die($e->getMessage());
            }                
        }
        $this->view("author/edit",$data);
    }


    public function deleteWiki(){
        if(isset($_POST["delete"])){
           $id = $_POST["id"];
           $wikiService = new WikiServiceImp();
           try{
            $wikiService->deleteWiki($id);
            $wikis = $wikiService->getAllWikisOfAuthor($_SESSION["userId"]);
            echo json_encode($wikis);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
        }
    }
    public function wikisOfAuthor(){
        $securityService = new SecurityServiceImp();
        $securityService->checkForAuthor();
        $this->view("author/wikisOfAuthor");
    }
}

?>