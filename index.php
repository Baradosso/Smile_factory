﻿<!DOCTYPE html>

<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1." />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <title>Smile Factory</title>
</head>
<body>
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
    <div class="unia">
        <div class="images">
            <img src="unia/flaga_unii.png" />
            <img src="unia/leader.png" />
            <img src="unia/prow.png" />
            <img src="unia/wlgd.png" />
        </div>
        <div class="unia_text">
            <p>"Europejski Fundusz Rolny na rzecz Rozwoju Obszarów Wiejskich: Europa inwestująca w obszary wiejskie".</p>
            <p>Operacja pn. <b>Smile Factory Jarosław Wróblewski</b></p>
            <p>mająca na celu rozwój przedsiębiorczości na terenie gminy Wolsztyn poprzez utworzenie nowego podmiotu gospodarczego w branży muzycznej i rozrywkowej</p>
            <p>współfinansowana jest ze środków Unii Europejskiej w ramach poddziałania "Wsparcie na wdrażanie operacji w ramach strategii rozwoju lokalnego kierowanego przez społeczność" Programu Rozwój Obszarów Wiejskich na lata 2014-2020</p>
        </div>
    </div>

    <header>
        <div id="slideshow" data-component="slideshow">
            <div role="list">
                <div class="slide">
                    <img src="slider/image1.jpg" class="slide_img">
                </div>
                <div class="slide">
                    <img src="slider/image2.jpg" class="slide_img">
                </div>
                <div class="slide">
                    <img src="slider/image3.jpg" class="slide_img">
                </div>
                <div class="slide">
                    <img src="slider/image4.jpg" class="slide_img">
                </div>
            </div>
        </div>

    </header>
    <section id="o_nas">
        <div class="logo_main">
            <img src="logo/logo_white.png" class="logo_white" />
        </div>
        <div class="o_nas_div">
            <h2>Coś o nas:</h2>
            <div class="o_nas">
                <img src="O_nas/O_nas.jpg" />
                <p>
                    Smile Factory jest małą firmą zajmującą się przynoszeniem uśmiechu naszym klientom. Robimy to poprzez szeroki zakres usług na imprezach okolicznościowych takich jak:
                    <br />- Oprawa Muzyczno-Konferansjerska,
                    <br />- Profesjonalne Nagłośnienie i Oświetlenie,
                    <br />- Wynajem Namiotów,
                    <br />- Fotobudka,
                    <br />- Fotolustro.
                    <br />Działamy na rynku od 2018 roku i mamy za sobą mnóstwo zadowolonych klientów, którzy z chęcią do nas wracają!
                </p>
            </div>
        </div>

        <div class="uslugi" id="uslugi">
            <h3>Nasze usługi:</h3>

            <div class="double_uslugi">
                <div class="button_border">
                    <?php
                        echo    '<a href="Uslugi.php?status=1" class="button_uslugi">
                                    <h6>Oprawa Muzyczno-Konferansjerska</h6>
                                    <img src="uslugi/image1.jpg" />
                                </a>';
                    ?>
                </div>
                <div class="button_border">
                    <?php
                        echo    '<a href="Uslugi.php?status=2" class="button_uslugi">
                                    <h6>Nagłośnienie i Oświetlenie</h6>
                                    <img src="uslugi/image2.jpg" />
                                </a>';
                    ?>
                </div>
            </div>

            <div class="double_uslugi">
                <div class="button_border">
                    <?php
                        echo    '<a href="Uslugi.php?status=3" class="button_uslugi">
                                    <h6>Wynajem Namiotów</h6>
                                    <img src="uslugi/image3.jpg" />
                                </a>';
                    ?>
                </div>
                <div class="button_border">
                   <?php
                        echo    '<a href="Uslugi.php?status=4" class="button_uslugi">
                                    <h6>Fotobudka i fotolustro</h6>
                                    <img src="uslugi/image4.jpg" />
                                </a>';
                    ?>
                </div>
            </div>

        </div>

        <div class="zaufali_nam">
            <div class="slideshow-container">
                <h4>Zaufali nam:</h4>
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 5</div>
                    <img src="Zaufali/image1.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="Zaufali/image2.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="Zaufali/image3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="Zaufali/image4.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="Zaufali/image5.png" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            </div>

    </section>

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
    <script src="zaufali.js"></script>
</body>

</html>