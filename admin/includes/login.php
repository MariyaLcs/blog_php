<?php require_once("init.php"); ?>

<?php

if($session->is_signed_in()){
redirect("index.php");
}

is(isset($_POST['submit'])){

$username = trim($_POST['submit']);
$password = trim($_POST['password']);

//Method to check database user

if($user_found){

$session->login($user_found);
redirect("index.php");

} else {
    $the_message = "Your password or username are incorrect";
}



} else {
    $username = "";
    $password = "";
}


?>