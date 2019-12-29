<?php require_once("includes/header.php"); ?>
<?php

if($session->is_signed_in()){redirect("index.php");}

if(isset($_POST['submit'])){

$username = trim($_POST['username']);
$password = trim($_POST['password']);

//Method to check database user

$user_found = User::verify_user($username, $password);

if($user_found){

$session->login($user_found);
redirect("index.php");

} else {
    $the_message = "Your password or username are incorrect";
}

} else {
/*message() method accepts argument $msg, which by default if nothing is provided holds an empty string.
If we do have provided the argument, then it will store it inside the session.
If we don't, it will return the existing message property
That's all about that method.

check_message() method first checks if the message is set inside the session, and if it is, it assigns it 
to the message property, then simply unsets it from the session. But if the message is not present in the session, 
it simply resets the message property to an empty string. So you can't set the message to an empty 
string with: $this->message; but you need to assign it a value of an empty string! $this->message = '';*/
	$the_message = "";
    $username = "";
    $password = "";
}
?>
<div class="col-md-4 col-md-offset-3">

<h4 class="bg-danger"><?php echo $the_message;?></h4>

<form id="login-id" action="" method="post">
	
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
	</div>
	<div class="form-group">
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</div>
</form>
</div>