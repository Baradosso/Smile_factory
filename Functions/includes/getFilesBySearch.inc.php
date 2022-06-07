<?php

require_once 'dbh.inc.php';

$search = "%{$_GET["search"]}%";
$order = $_GET["order_by"];

switch($order){
	case "0":
		$sql = "SELECT filesName, filesComment, filesCreateDate FROM files WHERE filesName LIKE ? OR filesComment LIKE ? OR filesCreateDate LIKE ? ORDER BY filesName";
		break;
	case "1":
		$sql = "SELECT filesName, filesComment, filesCreateDate FROM files WHERE filesName LIKE ? OR filesComment LIKE ? OR filesCreateDate LIKE ? ORDER BY filesComment";
		break;
	case "2":
		$sql = "SELECT filesName, filesComment, filesCreateDate FROM files WHERE filesName LIKE ? OR filesComment LIKE ? OR filesCreateDate LIKE ? ORDER BY filesCreateDate";
		break;
}

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Pliki/?error=stmtfailed");
		exit();
}

mysqli_stmt_bind_param($stmt, 'sss', $search, $search, $search);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);
$inc = 0;


echo	"<table class='filesTable'>
			<tr>
				<th class='filesTable_th'>Nazwa Pliku</th>
				<th class='filesTable_th'>Komentarz</th>
				<th class='filesTable_th'>Data utworzenia</th>
			</tr>";
while($row = mysqli_fetch_assoc($resultData)){
	if($inc > 4){
		$inc = 0;
	}
	echo	"<tr>
				<td class='filesTable_td".$inc."'>".$row['filesName']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesComment']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesCreateDate']."</td>
				<td class='edit_files_td'>
					<button value=".$row['filesName']." onclick='manageFiles(this.value)' class='edit_files_btn' title='Zarządzaj udostępnianiem pliku'>
						<img src='../../Functions/photos/icons/users.png' class='edit_files_img'>
					</button>
				</td>
				<td class='edit_files_td'>
					<button value=".$row['filesName']." onclick='deleteFiles(this.value)' class='edit_files_btn' title='Usuń plik'>
						<img src='../../Functions/photos/icons/bin.png' class='edit_files_img'>
					</button>
				</td>
			</tr>";
	$inc += 1;
}
echo	'</table>';
mysqli_stmt_close($stmt);
exit();


