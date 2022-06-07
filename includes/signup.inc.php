<?php

if(isset($_POST["submit"])){
	
	$name = $_POST["name"];
	$secondname = $_POST["secondname"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	$subject = 'Smile Factory konto';
	$message = 'Twoje has�o do konta na stronie Smile Factory to: '.$pwd.' Prosz� za login u�y� swojego emaila.';

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if(emptyInputSignup($name, $secondname, $email, $username, $pwd, $pwdrepeat) !== false){
		header("location: ../signup.php?error=emptyinput");
		exit();
	}

	if(invalidUid($username) !== false){
		header("location: ../signup.php?error=invaliduid");
		exit();
	}

	if(invalidEmail($email) !== false){
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	
	if(pwdMatch($pwd, $pwdrepeat) == false){
		header("location: ../signup.php?error=passwordsdontmatch");
		exit();
	}

	if(uidExists($conn, $username, $email) !== false){
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	createUser($conn, $name, $secondname, $email, $username, $pwd);
	mail($email, $subject, $message);

}
else{
	header("location: ../signup.php");
}

