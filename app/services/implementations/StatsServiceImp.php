<?php






class StatsServiceImp implements StatsServiceI{

    private Database $db;

    public function __construct(){
        $this->db = Database :: getInstance();
    }
    public function overallTags(){
        $this->db->query("SELECT COUNT(*) as tagCount FROM tag");
        return $this->db->fetchOneRow();
    }
    public function overallWikis(){
        $this->db->query("SELECT COUNT(*) as wikiCount FROM wiki");
        return $this->db->fetchOneRow();
    }
    public function overallUsers(){
        $this->db->query("SELECT COUNT(*) as usersCount FROM appuser");
        return $this->db->fetchOneRow();
    }
    public function overallCategories(){
        $this->db->query("SELECT COUNT(*) as categoryCount FROM category");
        return $this->db->fetchOneRow();
    }
}

?>