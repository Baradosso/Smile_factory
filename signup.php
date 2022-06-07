<?php
    include_once 'pod_menu.php';
    
    if((!isset($_SESSION["userpos"]) && $_SESSION["userpos"] !== "admin")){
        header("location: index.php");
    }
?>

<section class="page">
    <div class="sig_page">

        <section class="signup-form">

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
                            echo "<p>BŁĄD! Poprawnie zarejestrowano użytkownika!</p>";
                        }
                    }
                ?>

                <button type="submit" name="submit">Zarejestruj użytkownika</button>      
            </form>
        </section>
    </div>
</section>

<?php
    include_once 'pod_footer.php';
?>