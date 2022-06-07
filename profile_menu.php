<?php
    session_start();

    if(!isset($_SESSION["userpos"])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Smile Factory, SmileFactory, Fotobudka, Fotolustro, Oprawa muzyczna, Oprawa" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css\reset.css" rel="stylesheet" />
    <link href="css\profile_style.css" rel="stylesheet" />
    <title>Smile Factory</title>
</head>

<body class="bg_image">
    <nav>
        <table>
            <tr onclick="window.location='index.php';">
                <td class="img_td"><img src="photos/icons/home.png" class="nav_icons"/></td>    
                <td><p>Strona główna</p></td>
            </tr>

            <tr onclick="window.location='profile.php';">
                <td class="img_td"><img src="photos/icons/profile.png" class="nav_icons"/></td>
                <td><p>Profil</p></td>
            </tr>

            <?php
                if($_SESSION["userpos"] !== "admin"){
                    echo    '<tr onclick="window.location=\'dow_files.php\';">
                                <td class="img_td"><img src="photos/icons/files.png" class="nav_icons"/></td>
                                <td><p>Pliki do pobrania</p></td>
                            </tr>';
                }
                else{
                    echo    '<tr onclick="window.location=\'signup.php\';">
                                <td class="img_td"><img src="photos/icons/register.png" class="nav_icons"/></td>
                                <td><p>Rejestracja</p></td>
                            </tr>
                            <tr onclick="window.location=\'users_list.php\';">
                                <td class="img_td"><img src="photos/icons/users.png" class="nav_icons"/></td>
                                <td><p>Użytkownicy</p></td>
                            </tr>
                            <tr onclick="window.location=\'files_list.php\';">    
                                <td class="img_td"><img src="photos/icons/files.png" class="nav_icons"/></td>
                                <td><p>Lista plików</p></td>
                            </tr>';
                }
            ?>

            <tr onclick="window.location='includes/logout.inc.php';">
                <td class="img_td"><img src="photos/icons/log_out.png" class="nav_icons"/></td>
                <td><p>Wyloguj się</p></td>
            </tr>
        </table>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
