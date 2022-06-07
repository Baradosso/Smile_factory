<!DOCTYPE html>

<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1." />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="style_uslugi.css" rel="stylesheet" />
    <title>Smile Factory | Logowanie</title>
    <script>
    </script>
</head>
<body class="bg_logowanie">
   <nav>
        <div class="logo_nav">
            <h1>Smile Factory</h1>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="FAQ.html">FAQ</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <div class="o_nas_div">
        <form action="zaloguj_sie.php" method="post">
        <div class="zaloguj_sie">
            <label for="uname"><b>Login</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
 
                <label for="psw"><b>Hasło</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" href="#">Zaloguj się</button>
            </label>
            <p class="logowanie">Zapomniałeś hasła lub nie posiadasz jeszcze konta na naszej stronie?
            </br><a href="https://www.facebook.com/smile.factory.impreza" target="_blank">Skontaktuj się z nami</a> lub odwiedź nasze <a href="FAQ.html">FAQ!</a></p>
        </div>
        </form>
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