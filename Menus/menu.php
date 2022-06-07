<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Smile Factory, SmileFactory, Fotobudka, Fotolustro, Oprawa muzyczna, Oprawa" />
    <meta name="" content="" />
    <meta name="" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="./Functions/css/reset.css" rel="stylesheet" />
    <link href="./Functions/css/style.css" rel="stylesheet" />
    <title>Smile Factory</title>
</head>

<body>
    <nav>
        <div class="logo_nav">
            <h1>Smile Factory</h1>
        </div>
        <ul class="nav-links">
            <li><a href="./">Strona główna</a></li>
            <li><a href="./FAQ">FAQ</a></li>
            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li><a href='./Profil/Twoj-profil'>Profil</a></li>";
                    echo "<li><a href='./Functions/includes/logout.inc.php'>Wyloguj się</a></li>";
                }
                else{
                    echo "<li><a href='./Logowanie'>Zaloguj się</a></li>";
                }
            ?>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
