<?php
include_once 'dbconfig.php';

class Dao{
    var $db;
    public function __construct() {
        $this->db = new Dbconfig();
    }
    public function read(){
        $query = 'Select * from login';
        return mysqli_query($this->db->conn, $query);
    }   
}