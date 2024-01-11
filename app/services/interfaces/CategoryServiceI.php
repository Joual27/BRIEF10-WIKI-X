<?php



interface CategoryServiceI{
    public function getAllCategories();
    public function addCategory(Category $category);
    public function updateCategory(Category $category);
    public function deleteCategory($categoryId);

}



?>