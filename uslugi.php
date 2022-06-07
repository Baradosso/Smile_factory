<!DOCTYPE html>

<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1." />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="style_uslugi.css" rel="stylesheet" />
    <title>Smile Factory | Usługi</title>
</head>
<body  class="bg_logowanie">
    <nav>
        <div class="logo_nav">
            <h1>Smile Factory</h1>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="FAQ.html">FAQ</a></li>
            <li><a href="Zaloguj_sie.php">Zaloguj się</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="regulamin">
    <?php
        switch($_GET['status']){
            case 1:
                echo ' <h2>Oprawa Muzyczno-Konferansjerska</h2>
                        <div class="o_nas">
                            <img src="uslugi/image1.jpg" />
                            <p>
                                DOKŁADNE OPISY ZOSTANĄ DODANE WKRÓTCE!
                            </p>
                        </div>';
                break;

             case 2:
                echo ' <h2>Nagłośnienie i oświetlenie</h2>
                        <div class="o_nas">
                            <img src="uslugi/image2.jpg" />
                            <p>
                                DOKŁADNE OPISY ZOSTANĄ DODANE WKRÓTCE!
                            </p>
                        </div>';
                break;

             case 3:
                echo ' <h2>Wynajem namiotów</h2>
                        <div class="o_nas">
                            <img src="uslugi/image3.jpg" />
                            <p>
                                DOKŁADNE OPISY ZOSTANĄ DODANE WKRÓTCE!
                            </p>
                        </div>';
                break;

             case 4:
                echo ' <h2>Fotobudka i fotolustro</h2>
                        <div class="o_nas">
                            <img src="uslugi/image4.jpg" />
                            <p>
                                DOKŁADNE OPISY ZOSTANĄ DODANE WKRÓTCE!
                            </p>
                        </div>';
                break;
        }
       
    ?>
    </div>

    <footer id="kontakt">
        <div class="kontakt">
            <a href="https://www.facebook.com/smile.factory.impreza" target="_blank"><img src="kontakt/facebook.png" /></a>
            <a href="https://www.instagram.com/fotobudka.smilefactory/" target="_blank"><img src="kontakt/instagram.png" /></a>
            <p>kontakt.sf@gmail.com</p>
            <p>606 885 970</p>
            <a href="regulamin.html"><p id="regulamin">regulamin</p></a>
        </div>
        <hr />
        <div class="copyright">
            <p>© 2022 Smile Factory, Wszystkie prawa zastrzeżone</p>
        </div>
    </footer>
    <script src="app.js"></script>
</body>

</html>