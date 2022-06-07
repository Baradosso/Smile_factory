<?php

include "dbh.inc.php";

if(isset($_POST['fileName'])){

	$fileName = $_POST['fileName'];

	$path = "../../PlikiZip/".$fileName;
	unlink($path);

	$sql = "DELETE FROM files WHERE filesName=?";

	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Pliki/?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $fileName);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	exit();
}
else{
	header("location: ../../Profil/Pliki");
	exit();
}
