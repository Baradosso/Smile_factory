<?php

if(isset($_POST["submit"])){
	
	$name = $_POST["name"];
	$secondname = $_POST["secondname"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdrepeat = $_POST["pwdrepeat"];

	$subject = 'Smile Factory konto';
	$message = 'Twoje has³o do konta na stronie Smile Factory to: '.$pwd.' Proszê za login u¿yæ swojego e-maila.';

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if(emptyInputSignup($name, $secondname, $email, $username, $pwd, $pwdrepeat) !== false){
		header("location: ../../Profil/Rejestracja/?error=emptyinput");
		exit();
	}

	if(invalidUid($username) !== false){
		header("location: ../../Profil/Rejestracja/?error=invaliduid");
		exit();
	}

	if(invalidEmail($email) !== false){
		header("location: ../../Profil/Rejestracja/?error=invalidemail");
		exit();
	}
	
	if(pwdMatch($pwd, $pwdrepeat) !== false){
		header("location: ../../Profil/Rejestracja/?error=passwordsdontmatch");
		exit();
	}

	if(uidExists($conn, $username, $email) !== false){
		header("location: ../../Profil/Rejestracja/?error=usernametaken");
		exit();
	}

	createUser($conn, $name, $secondname, $email, $username, $pwd);
	mail($email, $subject, $message);

}
else{
	header("location: ../../Profil/Rejestracja");
}

