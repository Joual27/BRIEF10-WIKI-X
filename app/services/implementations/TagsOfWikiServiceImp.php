<?php




class TagsOfWikiServiceImp implements TagsOfWikiServiceI{

    private Database $db ;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function getAllTagsOfWiki(Wiki $wiki){
       $fetchTagsOfWikiQuery = "SELECT * FROM tag JOIN tagsofwiki ON tag.tagId = tagsofwiki.tagId WHERE tagsofwiki.wikiId = :wikiId";
       $this->db->query($fetchTagsOfWikiQuery);
       $this->db->bind(":wikiId",$wiki->wikiId);
       try{
        return $this->db->fetchMultipleRows();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
    public function addTagsOfWiki(Wiki $wiki,Tag $tag){
       $addTagOfWikiQuery = "INSERT INTO tagsofwiki VALUES (:wikiId , :tagId)";
       $this->db->query($addTagOfWikiQuery);
       $this->db->bind(":wikiId",$wiki->wikiId);
       $this->db->bind(":tagId",$tag->tagId);
       try{
        $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }

    public function deleteAllTagsOfWiki($wikiId){
       $updateTagOfWikiQuery = "DELETE FROM tagsofwiki WHERE wikiId = :id";
       $this->db->query($updateTagOfWikiQuery);
       $this->db->bind(":id",$wikiId);
       try{
        $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
}

?>