<?php
    include_once 'profile_menu.php';

    if($_SESSION["userpos"] !== "admin"){
        header("location: index.php");
    }
?>

<section class="page">
    <div class="sig_page">


            <h4>Zarejestruj użytkownika</h4>

            <form action="includes/signup.inc.php" method="POST" class="signup">

                <label for="name">Podaj imię użytkownika:</label>
                <input type="text" name="name" placeholder="Pełne imię" >
                
                <label for="secondname">Podaj nazwisko użytkownika:</label>
                <input type="text" name="secondname" placeholder="Pełne nazwisko" >
                
                <label for="email">Podaj e-mail użytkownika:</label>
                <input type="text" name="email" placeholder="Email" >
                
                <label for="uid">Podaj nazwę firmy użytkownika:</label>
                <input type="text" name="uid" placeholder="Nazwa firmy" >
                
                <label for="pwd">Podaj hasło:</label>
                <input type="password" name="pwd" placeholder="Hasło" >
                
                <label for="pwdrepeat">Powtórz hasło:</label>
                <input type="password" name="pwdrepeat" placeholder="Powtórz hasło" >

                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<div class=\"bubble\">Pola nie mogą być puste!</div>";
                        }
                        else if($_GET["error"] == "invaliduid"){
                            echo "<div class=\"bubble\">Wpisz poprawnie nazwę firmy!</div>";
                        }
                        else if($_GET["error"] == "invalidemail"){
                            echo "<div class=\"bubble\">Wpisz poprawny email!</div>";
                        }
                        else if($_GET["error"] == "passwordsdontmatch"){
                            echo "<div class=\"bubble\">Wpisane hasła się nie pokrywają!</div>";
                        }
                        else if($_GET["error"] == "stmtfailed"){
                            echo "<div class=\"bubble\">Coś poszło nie tak, spróbuj ponownie!</div>";
                        }
                        else if($_GET["error"] == "usernametaken"){
                            echo "<div class=\"bubble\">Nazwa firmy lub e-mail już istnieje w bazie!</div>";
                        }
                        else if($_GET["error"] == "none"){
                            echo "<div class=\"bubble\">Poprawnie zarejestrowano użytkownika!</div>";
                        }
                    }
                ?>

                <button type="submit" name="submit">Zarejestruj użytkownika</button>    
                
                <label for="generatedPwd">Wygeneruj hasło:</label>
                <input type="text" id="generatedPwd" placeholder="Generowane hasło" >

                <div class="generate">
                    <button id="pwdGen">Generuj hasło</button>      
                    <button id="pwdCopy">Kopiuj hasło</button>      
                </div>

            </form>
    </div>
</section>

<?php
    include_once 'profile_footer.php';
?>

<script src="js/generator.js"></script>
<script src="js/bubble.js"></script>

