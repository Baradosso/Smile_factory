    <footer>
        <div class="contact">

            <p class="contact_inf"> <a href="https://www.facebook.com/smile.factory.impreza" target="_blank"  class="kontakt_link">facebook</a></p>

            <p class="contact_inf"><a href="https://www.instagram.com/fotobudka.smilefactory/" target="_blank"  class="kontakt_link">instagram</a></p>

            <p class="contact_inf">kontakt.sf@gmail.com</p>

            <p class="contact_inf">606 885 970</p>

            <p class="contact_inf" id="regulamin"><a href="regulamin.php"  class="kontakt_link">regulamin</a></p>
        </div>

        <hr />

        <div class="copyright">
            <p>© 2022 Smile Factory, Wszystkie prawa zastrzeżone</p>
        </div>

    <!-- Messenger Wtyczka czatu Code -->
    <div id="fb-root"></div>

    <!-- Your Wtyczka czatu code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "759608460902344");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            xfbml            : true,
            version          : 'v14.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    </footer>
</body>
</html>

<script src="js\app.js"></script>
<script src="js\trusted.js"></script>