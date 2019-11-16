<?php

require_once("new_config.php");
/*
require_once() will attempt to include the file only once, 
if it's already included elsewhere, it won't included it again. 
Also, it will throw an error if the file path is not correct.

include() will include the file even if that file is included elsewhere, 
it will still include it. Also, it won't throw an error if the path is not correct.
*/

class Database {

    public $connection;

    function __construct(){
        $this->open_db_connection();
    }

    public function open_db_connection(){
        //$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->connection->connect_errno){
           die("Database connection failed badly" . $this->connection->connect_error);
        } 
    }

    public function query($sql){

        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }

    private function confirm_query($result){
        if(!$result){
            die("Query Failed" . $this->connection->error);
        }
    }

    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

    public function the_insert_id(){
        return $this->connection->insert_id;
    }
}

$database = new Database();

?>