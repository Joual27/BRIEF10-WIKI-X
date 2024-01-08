<?php 
   

    class Database {
        private $dbh;
        private $stmt;
        private $error;
        private static $_instance;

        private function __construct()
        {   
            $this->connect();
            
        }


        public static function getInstance(){

            if (is_null(self::$_instance)) {

                self::$_instance = new self();
            }
            
            return self::$_instance;

        }
        public function connect() {
            
            $db_info = [
                'host' => DB_HOST,
                'user' => DB_USER,
                'pass' => DB_PASS,
                'dbname' => DB_NAME
            ];
            $dsn = 'mysql:dbname=' . $db_info['dbname'] . ';host=' . $db_info['host'];
            try {
                $this->dbh = new PDO($dsn , $db_info['user'] , $db_info['pass'] );
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                return $this->dbh;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function query($sql) {
            $this->stmt = $this->dbh->prepare($sql);
        }
        public function bind($param , $value , $type = null) {
            if (is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    
                    default:
                        $type = PDO::PARAM_STR;
                        break;
                }
            }
            $this->stmt->bindValue($param , $value , $type);
        }
        public function execute() {
            return $this->stmt->execute();
        }

        public function fetchMultipleRows() {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function fetchOneRow() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
    }









?>