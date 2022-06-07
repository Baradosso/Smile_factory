<?php
    include_once '../../Menus/profile_menu.php';

    if((!isset($_SESSION["userpos"]) && $_SESSION["userpos"] !== "admin")){
        header("location: ../../");
    }
?>

<section class="page">
    <div class="calendar_page">
        <h6>Zawartość dostępna jedynie w pełnym wymiarze</h6>
        <iframe src="https://calendar.google.com/calendar/embed?height=768&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FWarsaw&showTitle=1&showPrint=0&showTabs=1&showCalendars=0&showTz=0&title=Smile%20Factory&src=Z3IzcHZuN25mbmE4N2JvdnN0amhsbzZzZW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23A79B8E"  style="border:solid 1px #777" width="1200" height="760" frameborder="0" scrolling="no"></iframe>
    </div>
</section>

<?php
    include_once '../../Footers/profile_footer.php';
?>