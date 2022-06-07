<?php

require_once 'dbh.inc.php';

$search = "%{$_GET["search"]}%";
$order = $_GET["order_by"];

switch($order){
	case "0":
		$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
			FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
			OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersName;";
		break;
	case "1":
		$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
			FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
			OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersSecondName;";
		break;
	case "2":
		$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
			FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
			OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersEmail;";
		break;
	case "3":
		$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
			FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
			OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersUid;";
		break;
	case "4":
		$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
			FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
			OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersPhoneNumber;";
		break;
	case "5":
		$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate 
			FROM users WHERE usersPos='user' AND (usersName LIKE ? OR usersSecondName LIKE ? OR usersEmail LIKE ? OR usersUid LIKE ? 
			OR usersPhoneNumber LIKE ? OR usersCreateDate LIKE ?) ORDER BY usersCreateDate;";
		break;
}

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Uzytkownicy/?error=stmtfailed");
		exit();
}

mysqli_stmt_bind_param($stmt, 'ssssss', $search, $search, $search, $search, $search, $search);


mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);
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
mysqli_stmt_close($stmt);
exit();


