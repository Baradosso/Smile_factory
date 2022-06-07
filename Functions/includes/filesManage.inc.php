<?php

require_once 'dbh.inc.php';

$fileName = $_GET["file"];

$sql = "SELECT filesName, filesComment, filesCreateDate FROM files WHERE filesName = ? ORDER BY filesComment";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Pliki/?error=stmtfailed");
		exit();
}

mysqli_stmt_bind_param($stmt, 's', $fileName);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($resultData);

echo	"<table class='usersTableManage'>
			<tr>
				<td class='filesTable_td0'>".$row['filesName']."</td>
				<td class='filesTable_td0'>".$row['filesComment']."</td>
				<td class='filesTable_td0'>".$row['filesCreateDate']."</td>
			</tr>
		</table>";

mysqli_stmt_close($stmt);
exit();


