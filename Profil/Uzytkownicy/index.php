<?php
    include_once '../../Menus/profile_menu.php';

    if((!isset($_SESSION["userpos"]) && $_SESSION["userpos"] !== "admin")){
        header("location: ../../");
    }
?>
<div id="managePage" class="managePage">
    <div id="managePageSection" class="managePageSection">
        <button id="escape" onclick="closeManageWindow()"><img src="../../Functions/Photos/Icons/escape.png"  class='escape_img' ></button>
        <div class="scroll_box">
            <div id="manageUsersFiles">
            </div>
        </div>  
    </div>
</div>
<section class="page">
    <div class="users_page">
        <input type="text" id="look_for" class="look_for" placeholder="Szukaj..." onkeydown="loadDb()"></input>
        <select name="order_by" id="order_by" onchange="loadDb()">
            <option value="0">Imię</option>
            <option value="1">Nazwisko</option>
            <option value="2">E-mail</option>
            <option value="3">Nazwa użytkownika</option>
            <option value="4">Numer telefonu</option>
            <option value="5">Daty utworzenia</option>
        </select>
        <div class="usersContainer" id="usersList">
            <?php
                include_once '../../Functions/includes/getUsers.inc.php';
            ?>
        </div>
    </div>
</section>
<?php
    include_once '../../Footers/profile_footer.php';
?>

<script src="../../Functions/js/usersList.js"></script>

