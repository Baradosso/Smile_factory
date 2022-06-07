<?php

if(isset($_POST['userUid']) && isset($_POST['fileName'])){

	require_once 'dbh.inc.php';

	$userUid = $_POST['userUid'];
	$fileName = $_POST['fileName'];

	$sql = "INSERT INTO users_files_relations(usersId, filesId) 
			VALUES (
				(SELECT usersId FROM users WHERE usersUid=? LIMIT 1),
				(SELECT filesId FROM files WHERE filesName=? LIMIT 1)
			)";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ./?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, 'ss', $userUid, $fileName);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	exit();
}