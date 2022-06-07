<?php
    include_once 'pod_menu.php';
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
                            echo "<p>Pola nie mogą być puste!</p>";
                        }
                        else if($_GET["error"] == "wronglogin"){
                            echo "<p>Niepoprawny e-mail!</p>";
                        }
                        else if($_GET["error"] == "wrongpwd"){
                            echo "<p>Niepoprawne hasło!</p>";
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