<?php
    session_start();

    if(!isset($_SESSION["userpos"])){
        header("location: ../../");
    }
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Organizacja imprez dla Ciebie">
    <meta name="keywords" content="smile, factory, smilefactory, fotobudka, fotolustro, oprawa muzyczna, oprawa, wolsztyn, jarosław, wróblewski" />
    <link rel="icon" type="image/png" href="../../logo_white.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="../../Functions/css/reset.css" rel="stylesheet" />
    <link href="../../Functions/css/profile_style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Smile Factory</title>
</head>

<body class="bg_image">
    <nav>
        <table class="nav_table">
            <tr onclick="window.location='../../';" class="nav_tr">
                <td class="img_td"><img src="../../Functions/photos/icons/home.png" class="nav_icons"/></td>    
                <td class="nav_td"><p>Strona główna</p></td>
            </tr>

            <tr onclick="window.location='../Twoj-profil';" class="nav_tr">
                <td class="img_td"><img src="../../Functions/photos/icons/profile.png" class="nav_icons"/></td>
                <td class="nav_td"><p>Profil</p></td>
            </tr>

            <?php
                if($_SESSION["userpos"] !== "admin"){
                    echo    '<tr onclick="window.location=\'../Pliki-do-pobrania\';" class="nav_tr">
                                <td class="img_td"><img src="../../Functions/photos/icons/files.png" class="nav_icons"/></td>
                                <td class="nav_td"><p>Pliki do pobrania</p></td>
                            </tr>';
                }
                else{
                    echo    '<tr onclick="window.location=\'../Kalendarz\';" class="nav_tr">
                                <td class="img_td"><img src="../../Functions/photos/icons/calendar.png" class="nav_icons"/></td>
                                <td class="nav_td"><p>Kalendarz</p></td>
                            </tr>
                            <tr onclick="window.location=\'../Rejestracja\';" class="nav_tr">
                                <td class="img_td"><img src="../../Functions/photos/icons/register.png" class="nav_icons"/></td>
                                <td class="nav_td"><p>Rejestracja</p></td>
                            </tr>
                            <tr onclick="window.location=\'../Uzytkownicy\';" class="nav_tr">
                                <td class="img_td"><img src="../../Functions/photos/icons/users.png" class="nav_icons"/></td>
                                <td class="nav_td"><p>Użytkownicy</p></td>
                            </tr>
                            <tr onclick="window.location=\'../Pliki\';" class="nav_tr">    
                                <td class="img_td"><img src="../../Functions/photos/icons/files.png" class="nav_icons"/></td>
                                <td class="nav_td"><p>Lista plików</p></td>
                            </tr>';
                }
            ?>

            <tr onclick="window.location='../../Functions/includes/logout.inc.php';" class="nav_tr">
                <td class="img_td"><img src="../../Functions/photos/icons/log_out.png" class="nav_icons"/></td>
                <td class="nav_td"><p>Wyloguj się</p></td>
            </tr>
        </table>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
