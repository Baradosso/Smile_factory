<?php 

function emptyInputSignup($name, $secondname, $email, $username, $pwd, $pwdrepeat){
	$result;
	if(empty($name) || empty($secondname) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function invalidUid($username){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function invalidEmail($email){
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdrepeat){
	$result;
	if($pwd !== $pwdrepeat){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $email){
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $secondname, $email, $username, $pwd){
	$sql = "INSERT INTO users(usersName, usersSecondName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sssss", $name, $secondname, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../signup.php?error=none");
	exit();
}

function emptyInputLogin($username, $pwd){
	$result;
	if(empty($username) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd){
	$uidExists = uidExists($conn, $username, $username);

	if($uidExists === false){
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if($checkPwd === false){
		header("location: ../login.php?error=wrongpwd");
		exit();
	}
	else if($checkPwd === true){
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		$_SESSION["userpos"] = $uidExists["usersPos"];
		$_SESSION["username"] = $uidExists["usersName"];
		$_SESSION["usersecondname"] = $uidExists["usersSecondName"];
		$_SESSION["useremail"] = $uidExists["usersEmail"];
		$_SESSION["userphone"] = $uidExists["usersPhoneNumber"];
		header("location: ../profile.php");
		exit();
	}
}

function changePassword($conn, $pwd, $npwd, $rnpwd, $userid){

	$sql = "SELECT usersPwd FROM users WHERE usersId=?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $userid);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
	}
	else{
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_close($stmt);
	if($uidExists === false){
		header("location: ../profile.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $row["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	$pattern = '/^(?=.*[\W|\D])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

	if($checkPwd === false){
		header("location: ../profile.php?error=wrongpwd");
		exit();
	}
	else if($checkPwd === true){
		if(pwdMatch($npwd, $rnpwd)){
			header("location: ../profile.php?error=passwordsdontmatch");
			exit();
		}
		else if(preg_match($pattern, $npwd) == 0){
			header("location: ../profile.php?error=nospecialcharacters");
			exit();
		}
	}

	updateDbPwd($conn, $npwd, $userid);
}

function updateDbName($conn, $name, $userid){
	$sql = "UPDATE users SET usersName=? WHERE usersId=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $name, $userid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function updateDbSecondName($conn, $secondname, $userid){
	$sql = "UPDATE users SET usersSecondName=? WHERE usersId=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $secondname, $userid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function updateDbEmail($conn, $email, $userid){
	$sql = "UPDATE users SET usersEmail=? WHERE usersId=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $email, $userid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function updateDbPhone($conn, $phone, $userid){
	$sql = "UPDATE users SET usersPhoneNumber=? WHERE usersId=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $phone, $userid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function updateDbPwd($conn, $npwd, $userid){
	$sql = "UPDATE users SET usersPwd=? WHERE usersId=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($npwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $userid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}