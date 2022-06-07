<?php
    include_once '../../Menus/profile_menu.php';
?>

<section class="page">
    <div class="prof_page">
        <input type="text" id="look_for" class="look_for" placeholder="Szukaj..." onkeydown="loadDb(this.value)"></input>
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

