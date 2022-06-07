<?php

include "dbh.inc.php";

if(isset($_POST['useruid'])){

	$useruid = $_POST['useruid'];
	$sql = "DELETE FROM users WHERE usersUid=?";

	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Uzytkownicy/?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $useruid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	exit();
}
else{
	header("location: ../../Profil/Uzytkownicy");
	exit();
}
