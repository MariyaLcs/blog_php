<?php

class Session{

    private $signied_in;
    public $user_id;

function __construct(){
    session_start();
}

}

$session = new Session();

?>