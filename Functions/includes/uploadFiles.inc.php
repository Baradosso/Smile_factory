<?php

if(isset($_POST['submit'])){

	require_once 'dbh.inc.php';
	
	$file = $_FILES['file'];
	$fileComment = $_POST['comment'];

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileType = $file['type'];
	$fileSize = $file['size'];
	$fileError = $file['error'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('zip');

	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 15728640){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = "../../PlikiZip/".$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);

				$sql = "INSERT INTO files(filesName, filesPath, filesComment, filesSize) VALUES (?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);

				if(!mysqli_stmt_prepare($stmt, $sql)){
						header("location: ../../Profil/Pliki/?error=stmtfailed");
						exit();
				}

				mysqli_stmt_bind_param($stmt, 'sssi', $fileNameNew, $fileDestination, $fileComment, $fileSize);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_close($stmt);

				header("location: ../../Profil/Pliki/?error=none");
				exit();
			}
			else{
				header("location: ../../Profil/Pliki/?error=filetoobig");
				exit();
			}
		}
		else{
			header("location: ../../Profil/Pliki/?error=failedupload");
			exit();
		}
	}
	else{
		header("location: ../../Profil/Pliki/?error=wrongext");
		exit();
	}
}