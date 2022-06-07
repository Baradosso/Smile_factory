<?php

require_once '../../Functions/includes/dbh.inc.php';

$userId = $_SESSION["userid"];

$sql = "SELECT filesName, filesComment, filesSize/1024 AS filesSize 
		FROM files 
		WHERE filesId IN (SELECT filesId FROM users_files_relations WHERE usersId=?) 
		ORDER BY filesComment";

$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Pliki-do-pobrania/?error=stmtfailed");
		exit();
}

mysqli_stmt_bind_param($stmt, 's', $userId);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

echo	"<table class='filesTable'>
			<tr>
				<th class='filesTable_th'>Nazwa Pliku</th>
				<th class='filesTable_th'>Komentarz</th>
				<th class='filesTable_th'>Rozmiar pliku(MB)</th>
			</tr>";
$inc = 0;
while($row = mysqli_fetch_assoc($resultData)){
	if($inc > 4){
		$inc = 0;
	}
	echo	"<tr>
				<td class='filesTable_td".$inc."'>".$row['filesName']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesComment']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesSize']."</td>
				<td class='edit_files_td'>
					<a href='../../Functions/includes/filesDownload.inc.php?fileName=".$row['filesName']."'>
						<button type='submit' class='edit_files_btn' title='Pobierz plik'>
							<img src='../../Functions/photos/icons/download.png' class='edit_files_img'>
						</button>
					</a>
				</td>
			</tr>";
	$inc += 1;
}
echo	'</table>';

