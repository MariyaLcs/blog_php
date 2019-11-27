<?php

class Session{

    private $signed_in;
    public $user_id;

function __construct(){
    session_start();
}

private function check_the_login(){
    if(isset($_SESSION['user_id'])){
        $this->user_id = $_SESSION['user_id'];
        $this->singed_in = true;
    } else {
        unset($this->user_id);
        $this->singed_in = false;
    }
}

}

$session = new Session();

?>