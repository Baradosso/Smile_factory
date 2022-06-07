<?php

if(isset($_GET['user'])){
	require_once 'dbh.inc.php';

	$userUid = $_GET["user"];

	$sql = "SELECT usersId, usersName, usersSecondName, usersEmail, usersUid, IFNULL(usersPhoneNumber, 'Brak numeru') AS usersPhoneNumber, usersCreateDate FROM users WHERE usersUid=?;";
	$usql = "SELECT a.filesId, a.filesName, a.filesComment, a.filesCreateDate, a.filesSize/1024 AS filesSize
			FROM files AS a JOIN users_files_relations AS b ON a.filesId=b.filesId 
			WHERE b.usersId=(SELECT usersId FROM users WHERE usersUid=?)
			ORDER BY a.filesComment;";

	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: ../../Profil/Uzytkownicy/?error=stmtfailed");
			exit();
	}

	mysqli_stmt_bind_param($stmt, 's', $userUid);
	mysqli_stmt_execute($stmt);
	$resultData = mysqli_stmt_get_result($stmt);

	$row = mysqli_fetch_assoc($resultData);

	echo	"<label for='usersTable' class='filesTableLabel'>Użytkownik</label>
			<table class='usersTableManage' name='usersTable'>
				<tr>
					<td class='usersTable_td0'>".$row['usersName']."</td>
					<td class='usersTable_td0'>".$row['usersSecondName']."</td>
					<td class='usersTable_td0'>".$row['usersEmail']."</td>
					<td class='usersTable_td0'>".$row['usersUid']."</td>
					<td class='usersTable_td0'>".$row['usersPhoneNumber']."</td>
					<td class='usersTable_td0'>".$row['usersCreateDate']."</td>
					<td class='edit_user_td'>
						<button id='userUidToFunction' value=".$row['usersUid']." onclick='deleteUser(this.value)' class='edit_user_btn' title='Usuń użytkownika'>
							<img src='../../Functions/photos/icons/bin.png' class='edit_user_img'>
						</button>
					</td>
				</tr>
			</table>";

	if(!mysqli_stmt_prepare($stmt, $usql)){
			header("location: ../../Profil/Uzytkownicy/?error=stmtfailed");
			exit();
	}
	
	mysqli_stmt_bind_param($stmt, 's', $userUid);
	mysqli_stmt_execute($stmt);
	$resultData = mysqli_stmt_get_result($stmt);
	
	$inc = 0;
	echo	"<label for='filesTable' class='filesTableLabel'>Pliki użytkownika</label>
			<table class='filesTableManage' name='filesTable'>
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
						<button value=".$row['filesName']." onclick='deleteRelation(this.value)' class='edit_files_btn' title='Wyłącz dostęp użytkownikowi do pliku'>
							<img src='../../Functions/photos/icons/escape.png' class='edit_files_img'>
						</button>
					</td>
				</tr>";
		$inc += 1;
	}
	echo	'</table>';

	mysqli_stmt_close($stmt);
	exit();
}


