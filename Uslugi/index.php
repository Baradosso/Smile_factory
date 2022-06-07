<?php
    include_once '../Menus/pod_menu.php';
?>

<section class="page">
    <div class="about_us_page">
        <div class="about_us_container">
            <?php
                switch($_GET['status']){
                    case 1:
                        echo '  <h2>Oprawa Muzyczno-Konferansjerska</h2>
                                <div class="about_us">
                                    <img src="../Functions/photos/services/image1_1.JPG" />
                                    <p>
                                        Profesjonalne przygotowanie to podstawa. Zawsze zarówno nagłośnienie jak oświetlenie i muzykę dobieramy pod wymagania klienta. 
                                        Zabawy zawsze wyważone i na poziomie nie wzbudzą nigdy nie smaku jak to często bywa. Konferansjer już od ponad 30 lat w zawodzie, 
                                        nigdy nie usłyszał złego słowa, natomiast jego syn pod względem technicznym i dj, go wyprzedza. Stąd to idealnie dobrany team na państwa Impreze!
                                    </p>
                                </div>';
                    break;

                    case 2:
                        echo '  <h2>Nagłośnienie i oświetlenie</h2>
                                <div class="about_us">
                                    <img src="../Functions/photos/services/image2_2.jpg" />
                                    <p>
                                        Nagłaśnianie imprez to również nasza pasja, dzięki naszemu zapleczu sprzętowemu i doświadczeniu, zawsze dobierzemy coś do Państwa wymagań. 
                                        Oświetlenie to nasza pasja, nie tylko programujemy światła do własnej dyspozycji, ale opisujemy i projektujemy również kluby.  
                                    </p>
                                </div>';
                    break;

                    case 3:
                        echo '  <h2>Wynajem namiotów</h2>
                                <div class="about_us">
                                    <img src="../Functions/photos/services/image3_3.jpg" />
                                    <p>
                                        Od niedawana w naszej usłudze pojawiły się namioty, na ten moment mamy do państwa dyspozycji namiot o wymiarach 6x3m, ale pewnie w niedługiej 
                                        przyszłości rozszerzymy tą nić działalności. 
                                    </p>
                                </div>';
                    break;

                    case 4:
                        echo '  <h2>Fotobudka i fotolustro</h2>
                                <div class="about_us">
                                    <img src="../Functions/photos/services/image4_4.jpg" />
                                    <p>
                                        Fotobudka, to już standard na 18 czy weselu w naszej ofercie znajdują się aż 2, ale nie może 
                                        zabraknąć oczywiście Nowości!!! Od tego roku w naszej ofercie znajdą Państwo również fotolustro! Piękna pamiątka z najwspanialszych imprez!
                                    </p>
                                </div>';
                    break;
                }
            ?>
        </div>
    </div>
</section>

<?php
    include_once '../Footers/pod_footer.php';
?>