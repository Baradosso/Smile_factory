<?php
    include_once 'pod_menu.php';

    if (isset($_SESSION["userid"])) {
        header("location: index.php");
    }
?>

<section class="page">
    <div class="sig_page">

        <section class="signup-form">

            <h4>Zaloguj się</h4>

            <form action="includes/login.inc.php" method="POST" class="signup">

                <label for="email">Podaj swój e-mail:</label>
                <input type="text" name="uid" placeholder="Email" >
    
                <label for="pwd">Podaj hasło:</label>
                <input type="password" name="pwd" placeholder="Hasło" >

                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<div class=\"bubble\">Pola nie mogą być puste!</div>";
                        }
                        else if($_GET["error"] == "wronglogin"){
                            echo "<div class=\"bubble\">Niepoprawny e-mail!</div>";
                        }
                        else if($_GET["error"] == "wrongpwd"){
                            echo "<div class=\"bubble\">Niepoprawne hasło!</div>";
                        }
                    }
                ?>

                <button type="submit" name="submit">Zaloguj się</button>
                <a href="FAQ.php">Nie pamiętam hasła</a>
            </form>
        </section>
    </div>
</section>

<?php
    include_once 'pod_footer.php';
?>

<script src="js/bubble.js"></script>
