<?php



interface TagServiceI{
    public function getAllTags();
    public function addTag(Tag $tag);
    public function updateTag(Tag $tag);
    public function deleteTag($tagId);
}


?>