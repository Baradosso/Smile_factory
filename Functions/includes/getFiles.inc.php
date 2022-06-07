<?php

require_once '../../Functions/includes/dbh.inc.php';

$sql = "SELECT filesName, filesComment, filesCreateDate, filesSize/1048576 AS filesSize FROM files ORDER BY filesComment";
$resultData = mysqli_query($conn, $sql);
$inc = 0;

echo	"<table class='filesTable'>
			<tr>
				<th class='filesTable_th'>Nazwa Pliku</th>
				<th class='filesTable_th'>Komentarz</th>
				<th class='filesTable_th'>Data utworzenia</th>
				<th class='filesTable_th'>Rozmiar pliku(MB)</th>
			</tr>";
while($row = mysqli_fetch_assoc($resultData)){
	if($inc > 4){
		$inc = 0;
	}
	echo	"<tr>
				<td class='filesTable_td".$inc."'>".$row['filesName']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesComment']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesCreateDate']."</td>
				<td class='filesTable_td".$inc."'>".$row['filesSize']."</td>
				<td class='edit_files_td'>
					<a href='../../Functions/includes/filesDownload.inc.php?fileName=".$row['filesName']."'>
						<button type='submit' class='edit_files_btn' title='Pobierz plik'>
							<img src='../../Functions/photos/icons/download.png' class='edit_files_img'>
						</button>
					</a>
				</td>
				<td class='edit_files_td'>
					<button value=".$row['filesName']." onclick='deleteFile(this.value)' class='edit_files_btn' title='Usuń plik'>
						<img src='../../Functions/photos/icons/bin.png' class='edit_files_img'>
					</button>
				</td>
			</tr>";
	$inc += 1;
}
echo	'</table>';

