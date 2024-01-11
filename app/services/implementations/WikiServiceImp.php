<?php




class WikiServiceImp implements WikiServiceI{

    private Database $db ;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function getAllWikis(){
       $fetchAllWikisQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN appuser ON wiki.userId = appuser.userId WHERE wiki.archived_at IS NULL ORDER BY wiki.created_at DESC";
       $this->db->query($fetchAllWikisQuery);
       try{
        return $this->db->fetchMultipleRows();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
    public function addWiki(Wiki $wiki){

    }
    public function updateWiki(Wiki $wiki){

    }
    public function deleteWiki($wikiId){
       $archiveQikiQuery = "UPDATE wiki SET archived_at = NOW() WHERE wikiId = :wikiId";
       $this->db->query($archiveQikiQuery);
       $this->db->bind(":wikiId", $wikiId);
       try{
        $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
}

?>