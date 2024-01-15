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

    public function getWikiById($wikiId){
        $fetchAllWikisQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN appuser ON wiki.userId = appuser.userId WHERE wiki.wikiId = :wikiId";
        $this->db->query($fetchAllWikisQuery);
        $this->db->bind(":wikiId",$wikiId);
        try{
         return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
         die($e->getMessage());
        }
     }

     public function search($searchTerm){
        if (empty($searchTerm)) {
            return [];
        }
        $searchQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN tagsofwiki ON wiki.wikiId = tagsofwiki.wikiId JOIN tag ON tagsofwiki.tagId = tag.tagId WHERE wiki.title LIKE :term OR category.categoryName LIKE :term OR tag.tagName LIKE :term GROUP BY wiki.title AND wiki.archived_at IS NULL";
        $this->db->query($searchQuery);
        $this->db->bind(":term",$searchTerm."%");
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            error_log("Error in search: " . $e->getMessage());

            return [];
            }
     }

     public function wikiInfo($wikiId){
        $wikiInfo = "SELECT
             AU.*,
             W.*,
             C.*,
             W.created_at as CreatedAt
         FROM
             appUser AS AU
         JOIN
             wiki AS W ON AU.userId = W.userId
         JOIN
             category AS C ON W.categoryId = C.categoryId 
         WHERE
             W.wikiId = :wikiId
         ";
        $this->db->query($wikiInfo);
        $this->db->bind(":wikiId",$wikiId);
        try{
           return $this->db->fetchOneRow();
        }
        catch(PDOException $e){
         die($e->getMessage());
        }
     }

    public function getAllWikisOfAuthor($userId){
       $fetchWikisOfAuthorQuery = "SELECT
            AU.*,
            W.*,
            C.*,
            TW.tagId AS Tag_Id,
            W.created_at as CreatedAt,
            T.tagName AS Tag_Name
        FROM
            appUser AS AU
        JOIN
            wiki AS W ON AU.userId = W.userId
        JOIN
            category AS C ON W.categoryId = C.categoryId
        JOIN
            tagsOfWiki AS TW ON W.wikiId = TW.wikiId
        JOIN
            tag AS T ON TW.tagId = T.tagId
        WHERE
            AU.userId = :userId
        AND
            W.archived_at IS NULL
        GROUP BY
            W.wikiId;
        ";
       $this->db->query($fetchWikisOfAuthorQuery);
       $this->db->bind(":userId",$userId);
       try{
          return $this->db->fetchMultipleRows();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
    public function addWiki(Wiki $wiki){
      $addWikiQuery = "INSERT INTO wiki VALUES(:wikiId , :title , :content , :img , :userId , :categoryId , NOW(),NULL)";
      $this->db->query($addWikiQuery);
      $this->db->bind(":wikiId" , $wiki->wikiId);
      $this->db->bind(":title" , $wiki->title);
      $this->db->bind(":content" , $wiki->content);
      $this->db->bind(":img" , "wiki.png");
      $this->db->bind(":userId" , $wiki->user->userId);
      $this->db->bind(":categoryId" , $wiki->category->categoryId);
      try{
       $this->db->execute();
      }
      catch(PDOException $e){
        die($e->getMessage());
       }
    }
    public function updateWiki(Wiki $wiki){
        $updateWikiQuery = "UPDATE wiki set title = :title , content = :content , categoryId = :categoryId WHERE wikiId = :wikiId";
        $this->db->query($updateWikiQuery);
        $this->db->bind(":title" , $wiki->title);
        $this->db->bind(":content" , $wiki->content);
        $this->db->bind(":categoryId" , $wiki->category->categoryId);
        $this->db->bind(":wikiId" , $wiki->wikiId);
        try{
         $this->db->execute();
        }
        catch(PDOException $e){
          die($e->getMessage());
         }
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