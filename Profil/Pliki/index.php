<?php
    include_once '../../Menus/profile_menu.php';

    if((!isset($_SESSION["userpos"]) && $_SESSION["userpos"] !== "admin")){
        header("location: ../../");
    }
?>
<div id="managePage" class="managePage" onclick="closeManageWindow()"></div>
<div id="managePageSection" class="managePageSection">
    <div class="scroll_box">
        <div id="manageFiles">
        </div>
    </div>  
</div>
<section class="page">
    <div class="files_page">
        <div>
            <form action="../../Functions/includes/uploadFiles.inc.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" class="uploadFile"></br>
                <input type="text" name="comment" class="uploadComment" placeholder="Dodaj komentarz/własny tytuł..." required>
                <button type="submit" name="submit" class="uploadSubmit">Załaduj plik</button>
            </form>
        </div>
        <div>
            <input type="text" id="look_for" class="look_for" placeholder="Szukaj..." onkeydown="loadDb()"></input>
            <select name="order_by" id="order_by" onchange="loadDb()">
                <option value="0">Nazwa pliku</option>
                <option value="1">Komentarz</option>
                <option value="2">Data utworzenia</option>
            </select>
        </div>
        <div class="filesContainer" id="filesList">
            <?php
                include_once '../../Functions/includes/getFiles.inc.php';
            ?>
        </div>
    </div>
</section>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "filetoobig"){
            echo "<div class=\"bubble\">Za duży plik, maksymalnie 1.5GB (1536MB)!</div>";
        }
        else if($_GET["error"] == "failedupload"){
            echo "<div class=\"bubble\">Coś poszło nie tak, spróbuj ponownie!</div>";
        }
        else if($_GET["error"] == "wrongext"){
            echo "<div class=\"bubble\">Złe rozszerzenie, tylko pliki .zip!</div>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<div class=\"bubble\">Coś poszło nie tak, spróbuj ponownie!</div>";
        }
        else if($_GET["error"] == "none"){
            echo "<div class=\"bubble\">Udało Ci się załadować plik!</div>";
        }
    }
?>
<?php
    include_once '../../Footers/profile_footer.php';
?>

<script src="../../Functions/js/filesList.js"></script>
<script src="../../Functions/js/bubble.js"></script>

