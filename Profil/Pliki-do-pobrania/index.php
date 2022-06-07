<?php
    include_once '../../Menus/profile_menu.php';

    if((!isset($_SESSION["userpos"]) && $_SESSION["userpos"] !== "admin")){
        header("location: ../../");
    }
?>

<section class="page">
    <div class="files_page">
        <div class="filesContainer" id="filesList">
            <?php
                include_once '../../Functions/includes/getUserFiles.inc.php';
            ?>
        </div>
    </div>
</section>

<?php
    include_once '../../Footers/profile_footer.php';
?>