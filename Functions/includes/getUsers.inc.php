<?php

require_once '../../Functions/includes/dbh.inc.php';

$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate FROM users WHERE usersPos='user' ORDER BY usersName";
$resultData = mysqli_query($conn, $sql);
$inc = 0;

echo	"<table class='usersTable'>
			<tr>
				<th class='usersTable_th'>Imię</th>
				<th class='usersTable_th'>Nazwisko</th>
				<th class='usersTable_th'>E-mail</th>
				<th class='usersTable_th'>Nazwa użytkownika</th>
				<th class='usersTable_th'>Numer telefonu</th>
				<th class='usersTable_th'>Data utworzenia konta</th>
			</tr>";
while($row = mysqli_fetch_assoc($resultData)){
	if($inc > 4){
		$inc = 0;
	}
	echo	"<tr>
				<td class='usersTable_td".$inc."'>".$row['usersName']."</td>
				<td class='usersTable_td".$inc."'>".$row['usersSecondName']."</td>
				<td class='usersTable_td".$inc."'>".$row['usersEmail']."</td>
				<td class='usersTable_td".$inc."'>".$row['usersUid']."</td>
				<td class='usersTable_td".$inc."'>".$row['usersPhoneNumber']."</td>
				<td class='usersTable_td".$inc."'>".$row['usersCreateDate']."</td>
				<td class='edit_user_td'>
					<button value=".$row['usersUid']." onclick='manageUser(this.value)' class='edit_user_btn' title='Zarządzaj plikami użytkownika'>
						<img src='../../Functions/photos/icons/files.png' class='edit_user_img'>
					</button>
				</td>
			</tr>";
	$inc += 1;
}
echo	'</table>';

