<?php

session_start();

if(isset($_POST["submit"])){
	
	$name = $_POST["firstname"];
	$secondname = $_POST["secondname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];

	$userid = $_SESSION["userid"];

	$pwd = $_POST["pwd"];
	$npwd = $_POST["newPwd"];
	$rnpwd = $_POST["repNewPwd"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	$test = false;

	if($name !== $_SESSION["username"] && $name != Null && $name != ""){
		updateDbName($conn, $name, $userid);
		$_SESSION["username"] = $name;
		$test = true;
	}

	if($secondname !== $_SESSION["usersecondname"] && $secondname != Null && $secondname != ""){
		updateDbSecondName($conn, $secondname, $userid);
		$_SESSION["usersecondname"] = $secondname;
		$test = true;
	}

	if($email !== $_SESSION["useremail"] && $email != Null && $email != ""){
		if(invalidEmail($email) !== false){
			header("location: ../../Profil/Twoj-profil/?error=invalidemail");
			exit();
		}
		else{
			if(uidExists($conn, $email, $email) !== false){
				header("location: ../../Profil/Twoj-profil/?error=emailtaken");
				exit();
			}
			else{
				updateDbEmail($conn, $email, $userid);
				$_SESSION["useremail"] = $email;
				$test = true;
			}
		}
	}

	if($phone !== $_SESSION["userphone"] && $phone != Null && $phone != ""){
		if(preg_match('/[0-9]{9}/', $phone)){
			updateDbPhone($conn, $phone, $userid);
			$_SESSION["userphone"] = $phone;
			$test = true;
		}
		else{
			header("location: ../../Profil/Twoj-profil/?error=wrongnumber");
			exit();
		}	
	}

	if($pwd !== Null && $pwd !== "" && $npwd !== Null && $npwd !== "" && $rnpwd !== Null && $rnpwd !== ""){
		changePassword($conn, $pwd, $npwd, $rnpwd, $userid);
		$test = true;

	}

	if($test == true){
		header("location: ../../Profil/Twoj-profil/?error=none");
	}
	else{
		header("location: ../../Profil/Twoj-profil");
	}
	exit();
}
else{
	header("location: ../../Profil/Twoj-profil");
	exit();
}

