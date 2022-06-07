<?php
if(isset($_GET['fileName'])){
	$fileName = $_GET['fileName'];
	$filePath = "../../PlikiZip/".$fileName;

	if(!empty($fileName) && file_exists($filePath)){
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Description: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

		readfile($filePath);
		exit();
	}
}