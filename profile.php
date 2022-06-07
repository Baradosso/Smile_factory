<?php
    include_once 'profile_menu.php';
?>

<section class="page">
    <div class="prof_page">

        <form action="includes/edit.inc.php" method="POST" class="profile">
            <?php
                echo    '<label for="name">Imię:</label>
                        <div class="generate">
                            <input type="text" id="firstname" name="firstname" value="'.$_SESSION["username"].'" onkeydown="return /^[\s\p{L}]+$/u.test(event.key)" required disabled>
                            <button id="editName" title="Edytuj imię"><img src="photos/icons/edit.png" class="edit_icons"></button>
                        </div>

                        <label for="secondname">Nazwisko:</label>
                        <div class="generate">
                            <input type="text" id="secondname" name="secondname" value="'.$_SESSION["usersecondname"].'" onkeydown="return /^[\s\p{L}]+$/u.test(event.key)" required disabled>
                            <button id="editSecondName" title="Edytuj nazwisko"><img src="photos/icons/edit.png" class="edit_icons"></button>
                        </div>

                        <label for="email">E-mail:</label>
                        <div class="generate">
                            <input type="email" id="email" name="email" value="'.$_SESSION["useremail"].'" required disabled>
                            <button id="editEmail" title="Edytuj email`a"><img src="photos/icons/edit.png" class="edit_icons"></button>
                        </div>

                        <label for="phone">Numer telefonu:</label>
                        <div class="generate">
                            <input type="text" id="phone" name="phone" value="'.$_SESSION["userphone"].'" disabled>
                            <button id="editPhone" title="Edytuj numer telefonu"><img src="photos/icons/edit.png" class="edit_icons"></button>
                        </div>';
            ?>

            <label id="pwdlabel" for="pwd">Hasło:</label>
            <div class="generate">
                <input type="password" id="pwd" name="pwd" placeholder="********" title="Podaj obecne hasło" disabled>
                <button id="editPwd" title="Edytuj hasło"><img src="photos/icons/edit.png" class="edit_icons" ></button>
            </div>

            <label id="newpwdlabel" for="newPwd" style="display:none">Nowe hasło:</label>
            <input type="password" id="newPwd" name="newPwd" placeholder="********" title="Hasło musi zawierać 8 do 20 znaków, przynajmniej 1 małą literę, 1 wielką literę, 1 liczbę i 1 znak specjalny." style="display:none">

            <label id="repnewpwdlabel" for="repNewPwd" style="display:none">Powtórz nowe hasło:</label>
            <input type="password" id="repNewPwd" name="repNewPwd" placeholder="********" title="Hasła muszą być takie same" style="display:none">

            <button type="submit" id="sbmt_btn" name="submit">Zatwierdź</button>

        </form>
    </div>
</section>

<?php
    include_once 'profile_footer.php';
?>

<script src="js/edit.js"></script>
