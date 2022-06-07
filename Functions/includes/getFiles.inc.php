<?php

require_once '../../Functions/includes/dbh.inc.php';

$sql = "SELECT filesName, filesComment, filesCreateDate FROM files ORDER BY filesComment";
$resultData = mysqli_query($conn, $sql);
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

