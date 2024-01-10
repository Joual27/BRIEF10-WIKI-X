<?php



interface WikiServiceI {
    public function getAllWikis();
    public function addWiki(Wiki $wiki);
    public function updateWiki(Wiki $wiki);
    public function deleteWiki($wikiId);

}


?>