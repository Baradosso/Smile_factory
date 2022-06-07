<?php

require_once 'dbh.inc.php';

$search = "%{$_GET["search"]}%";

$sql = "SELECT usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
		FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
		OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersCreateDate;";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Uzytkownicy/?error=stmtfailed");
		exit();
}

mysqli_stmt_bind_param($stmt, 'ssssss', $search, $search, $search, $search, $search, $search);


mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

echo	'<table class="usersTable">
			<tr>
				<th class="usersTable_th">Imię</th>
				<th class="usersTable_th">Nazwisko</th>
				<th class="usersTable_th">E-mail</th>
				<th class="usersTable_th">Nazwa użytkownika</th>
				<th class="usersTable_th">Numer telefonu</th>
				<th class="usersTable_th">Data utworzenia konta</th>
			</tr>';
while($row = mysqli_fetch_assoc($resultData)){
	echo	"<tr>
				<td class=\"usersTable_td\">".$row['usersName']."</td>
				<td class=\"usersTable_td\">".$row['usersSecondName']."</td>
				<td class=\"usersTable_td\">".$row['usersEmail']."</td>
				<td class=\"usersTable_td\">".$row['usersUid']."</td>
				<td class=\"usersTable_td\">".$row['usersPhoneNumber']."</td>
				<td class=\"usersTable_td\">".$row['usersCreateDate']."</td>
				<td class=\"edit_user_td\"><button value=".$row['usersUid']." class=\"edit_user_btn\" title=\"Zarządzaj plikami użytkownika\"><img src=\"../../Functions/photos/icons/files.png\" class=\"edit_user_img\"></button></td>
				<td class=\"edit_user_td\"><button value=".$row['usersUid']." class=\"edit_user_btn\" title=\"Usuń użytkownika\"><img src=\"../../Functions/photos/icons/bin.png\" class=\"edit_user_img\"></button></td>
			</tr>";
}
echo	'</table>';



