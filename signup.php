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
                            echo "<p>BŁĄD! Pola nie mogą być puste!</p>";
                        }
                        else if($_GET["error"] == "invaliduid"){
                            echo "<p>BŁĄD! Wpisz poprawnie nazwę firmy!</p>";
                        }
                        else if($_GET["error"] == "invalidemail"){
                            echo "<p>BŁĄD! Wpisz poprawny email!</p>";
                        }
                        else if($_GET["error"] == "passwordsdontmatch"){
                            echo "<p>BŁĄD! Wpisane hasła się nie pokrywają!</p>";
                        }
                        else if($_GET["error"] == "stmtfailed"){
                            echo "<p>BŁĄD! Coś poszło nie tak, spróbuj ponownie!</p>";
                        }
                        else if($_GET["error"] == "usernametaken"){
                            echo "<p>BŁĄD! Nazwa firmy już istnieje w bazie!</p>";
                        }
                        else if($_GET["error"] == "none"){
                            echo "<p>Poprawnie zarejestrowano użytkownika!</p>";
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
