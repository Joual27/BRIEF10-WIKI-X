<?php




class TagServiceImp implements TagServiceI{

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function getAllTags(){
        $fetchAllTagsQuery = "SELECT * FROM tag";
        $this->db->query($fetchAllTagsQuery);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function addTag(Tag $tag){
        $addTagQuery = "INSERT INTO tag VALUES(:tagId, :tagName , NOW())";
        $this->db->query($addTagQuery);
        $this->db->bind(":tagId",$tag->tagId);
        $this->db->bind(":tagName",$tag->tagName);  
        try{
            $this->db->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function updateTag(Tag $tag){
       $updateTagQuery = "UPDATE tag SET tagName = :tagName WHERE tagId = :tagId";
       $this->db->query($updateTagQuery);
       $this->db->bind(":tagName", $tag->tagName);
       $this->db->bind(":tagId", $tag->tagId);

       try{
        $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
    }
    }
    public function deleteTag($tagId){
       $deleteTagQuery = "DELETE FROM tag WHERE tagId = :id";
       $this->db->query($deleteTagQuery);
       $this->db->bind(":id", $tagId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
    }

    }
}


?>