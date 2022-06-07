<?php
    include_once './Menus/menu.php';
?>

<section class="page">
    <section class="unia">
        <div class="unia_images">
            <img src="./Functions/photos/unia/image1.png" />
            <img src="./Functions/photos/unia/image2.png" />
            <img src="./Functions/photos/unia/image3.png" />
            <img src="./Functions/photos/unia/image4.png" />
        </div>
        <div class="unia_text">
            <p>"Europejski Fundusz Rolny na rzecz Rozwoju Obszarów Wiejskich: Europa inwestująca w obszary wiejskie".</p>
            <p>Operacja pn. <b>Smile Factory Jarosław Wróblewski</b></p>
            <p>mająca na celu rozwój przedsiębiorczości na terenie gminy Wolsztyn poprzez utworzenie nowego podmiotu gospodarczego w branży muzycznej i rozrywkowej</p>
            <p>współfinansowana jest ze środków Unii Europejskiej w ramach poddziałania "Wsparcie na wdrażanie operacji w ramach strategii rozwoju lokalnego kierowanego przez społeczność" Programu Rozwój Obszarów Wiejskich na lata 2014-2020</p>
        </div>
    </section>

    <section class="slideshow">
        <div id="slideshow" data-component="slideshow">
            <div role="list">
                <div class="slide">
                    <img src="./Functions/photos/slider/image1.JPG" class="slide_img">
                </div>
                <div class="slide">
                    <img src="./Functions/photos/slider/image2.jpg" class="slide_img">
                </div>
                <div class="slide">
                    <img src="./Functions/photos/slider/image3.jpg" class="slide_img">
                </div>
                <div class="slide">
                    <img src="./Functions/photos/slider/image4.jpg" class="slide_img">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="logo">
            <img src="./Functions/photos/logo/logo_white.png" class="logo_white" />
        </div>

        <div class="about_us_container">
            <h2>Coś o nas:</h2>
            <div class="about_us">
                <img src="./Functions/photos/about_us/about_us.JPG"/>
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

        <div class="services">
            <h3>Nasze usługi:</h3>
            <div class="service_buttons">
                <div class="button_border">
                    <?php
                        echo    '<a href="./Uslugi/index.php?status=1" class="button_services">
                                    <h6>Oprawa Muzyczno-Konferansjerska</h6>
                                    <img src="./Functions/photos/services/image1.JPG" />
                                </a>';
                    ?>
                </div>

                <div class="button_border">
                    <?php
                        echo    '<a href="./Uslugi/?status=2" class="button_services">
                                    <h6>Nagłośnienie i Oświetlenie</h6>
                                    <img src="./Functions/photos/services/image2.jpg" />
                                </a>';
                    ?>
                </div>
            </div>
            <div class="service_buttons">
                <div class="button_border">
                    <?php
                        echo    '<a href="./Uslugi/?status=3" class="button_services">
                                    <h6>Wynajem Namiotów</h6>
                                    <img src="./Functions/photos/services/image3.jpg" />
                                </a>';
                    ?>
                </div>

                <div class="button_border">
                   <?php
                        echo    '<a href="./Uslugi/?status=4" class="button_services">
                                    <h6>Fotobudka i fotolustro</h6>
                                    <img src="./Functions/photos/services/image4.jpg" />
                                </a>';
                    ?>
                </div>
            </div>
        </div>

        <div class="trusted">
            <div class="slideshow-container">
                <h3>Zaufali nam:</h3>
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="./Functions/photos/trusted/image2.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="./Functions/photos/trusted/image3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="./Functions/photos/trusted/image4.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="./Functions/photos/trusted/image5.png" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </section>
</section>

<?php
    include_once './Footers/footer.php';
?>