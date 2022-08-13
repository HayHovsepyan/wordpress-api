<?php
    class User{
        // Connection
        private $conn;
        // Table
        private $db_table = "wp_users";
        // Columns
        public $ID;
        public $user_login;
        public $user_pass;
        public $user_nicename;
        public $user_email;
        public $user_url;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getUsers(){
            $sqlQuery = "SELECT ID, user_login, user_pass, user_nicename, user_email, user_url FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }	
    }
?>

