<?php




class CategoryServiceImp implements CategoryServiceI{

    private $db;


    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function getAllCategories(){
        $fetchCategoriesQuery = "SELECT * FROM category";
        $this->db->query($fetchCategoriesQuery);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function addCategory(Category $category){
       $addCategoryQuery = "INSERT INTO category VALUES (:categoryId , :categoryName, :categoryDesc , NOW())";
       $this->db->query($addCategoryQuery);
       $this->db->bind(":categoryId",$category->categoryId);
       $this->db->bind(":categoryName",$category->categoryName);
       $this->db->bind(":categoryDesc",$category->categoryDesc);
       try{
        $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
    }

    }
    public function updateCategory(Category $category){
       $updateCategoryQuery = "UPDATE category SET categoryName = :categoryName , categoryDesc = :categoryDesc WHERE categoryId = :categoryId";
       $this->db->query($updateCategoryQuery);
       $this->db->bind(":categoryName",$category->categoryName);
       $this->db->bind(":categoryDesc",$category->categoryDesc);
       $this->db->bind(":categoryId",$category->categoryId);
       try{
         $this->db->execute();
       }
       catch(PDOException $e){
         die($e->getMessage());
       }
    }
    public function deleteCategory($categoryId){
       $deleteCategoryQuery = "DELETE FROM category WHERE categoryId = :categoryId";
       $this->db->query($deleteCategoryQuery);
       $this->db->bind(":categoryId",$categoryId);
       try{
        $this->db->execute();
      }
      catch(PDOException $e){
        die($e->getMessage());
      }
    }
}


?>