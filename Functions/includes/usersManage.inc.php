<?php

require_once 'dbh.inc.php';

$userUid = $_GET["user"];

$sql = "SELECT usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate FROM users WHERE usersUid=?;";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../Profil/Uzytkownicy/?error=stmtfailed");
		exit();
}

mysqli_stmt_bind_param($stmt, 's', $userUid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($resultData);

echo	"<table class='usersTableManage'>
			<tr>
				<td class='usersTable_td0'>".$row['usersName']."</td>
				<td class='usersTable_td0'>".$row['usersSecondName']."</td>
				<td class='usersTable_td0'>".$row['usersEmail']."</td>
				<td class='usersTable_td0'>".$row['usersUid']."</td>
				<td class='usersTable_td0'>".$row['usersPhoneNumber']."</td>
				<td class='usersTable_td0'>".$row['usersCreateDate']."</td>
			</tr>
		</table>";

mysqli_stmt_close($stmt);
exit();


