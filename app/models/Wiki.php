<?php


class Wiki{
    private $wikiId;
    private $title;
    private $content ;
    private $wikiImg;
    private AppUser $user;
    private Category $category;
    private $created_at ;


    public function __construct(){

    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}


?>