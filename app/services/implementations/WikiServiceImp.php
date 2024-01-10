<?php




class WikiServiceImp implements WikiServiceI{
    public function getAllWikis(){
       $fetchAllWikisQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN appuser ON wiki.userId = appuser.userId ORDER BY wiki.created_at DESC";
       
    }
    public function addWiki(Wiki $wiki){

    }
    public function updateWiki(Wiki $wiki){

    }
    public function deleteWiki($wikiId){

    }
}

?>