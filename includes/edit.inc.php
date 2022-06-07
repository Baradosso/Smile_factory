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

	if($name !== $_SESSION["username"] && $name != Null && $name != ""){
		updateDbName($conn, $name, $userid);
		$_SESSION["username"] = $name;
	}

	if($secondname !== $_SESSION["usersecondname"] && $secondname != Null && $secondname != ""){
		updateDbSecondName($conn, $secondname, $userid);
		$_SESSION["usersecondname"] = $secondname;
	}

	if($email !== $_SESSION["useremail"] && $email != Null && $email != ""){
		if(invalidEmail($email) !== false){
			header("location: ../profile.php?error=wrongemail");
			exit();
		}
		else{
			if(uidExists($conn, $email, $email) !== false){
				header("location: ../signup.php?error=emailtaken");
				exit();
			}
			else{
				updateDbEmail($conn, $email, $userid);
				$_SESSION["useremail"] = $email;
			}
		}
	}

	if($phone !== $_SESSION["userphone"] && $phone != Null && $phone != ""){
		if(preg_match('/[0-9]{9}/', $phone)){
			updateDbPhone($conn, $phone, $userid);
			$_SESSION["userphone"] = $phone;
		}
		else{
			header("location: ../profile.php?error=wrongnumber");
			exit();
		}	
	}

	if($pwd !== Null && $pwd !== "" && $npwd !== Null && $npwd !== "" && $rnpwd !== Null && $rnpwd !== ""){
		changePassword($conn, $pwd, $npwd, $rnpwd, $userid);
	}

	header("location: ../profile.php?error=success");
	exit();
}
else{
	header("location: ../profile.php");
	exit();
}

