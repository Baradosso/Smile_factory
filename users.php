<?php
    include_once 'profile_menu.php';
?>

<section class="page">
    <div class="prof_page">
        <input type="text" id="look_for" class="look_for" placeholder="Szukaj..." onkeydown="loadDb(this.value)"></input>
        <div class="usersContainer" id="usersList">
            <?php
                include_once 'includes/getUsers.inc.php';
            ?>
        </div>
    </div>
</section>

<?php
    include_once 'profile_footer.php';
?>

<script src="js/usersList.js"></script>

