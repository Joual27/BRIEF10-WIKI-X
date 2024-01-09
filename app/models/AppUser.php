

<?php



class AppUser{
    private $userId;
    private $username ;
    private $password ;
    private $email ;
    private $userImg;

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