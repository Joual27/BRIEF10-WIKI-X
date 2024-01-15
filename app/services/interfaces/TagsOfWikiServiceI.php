<?php





interface TagsOfWikiServiceI{
    
    public function getAllTagsOfWiki(Wiki $wiki);
    public function addTagsOfWiki(Wiki $wiki,Tag $tag);
}


?>