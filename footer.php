
    </div> 
    <script>
        $(window).load(function () {
            $('#loading').hide();
            $('#extracontrols').removeClass('cacher').addClass('voir');
            $("#logo_header").fadeIn(7000);
            $(".texte_header").typed({
              strings: ["^4000 <h2>Les jeux qui vont vous faire parler et <span class='load_txt'>rire</span></h2>"],
              showCursor: false
            });
            $('#plop').prepend('<iframe id="google_map" src="https://www.google.com/maps/d/embed?mid=1oiW3I675HiPEXyBsLPrGuklMQfw" width="640" height="480"></iframe>');
        });

        $(document).ready(function() {
            $("#lightSlider").lightSlider({
                speed: 500,
                pause: 5000,
                auto: true,
                item: 1,
                autoWidth: true,
                mode: 'fade',
                loop: true,
                controls: false,
                pager: false,
                adaptiveHeight: true
            });

        });

    </script>
    <script type="text/javascript" async>

    if ($(window).width() > 767) {
        $(document).load(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) 
            return;
          js = d.createElement(s); 
          js.id = id;
          js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
          fjs.parentNode.insertBefore(js, fjs);
        }
        (document, 'script', 'facebook-jssdk'));   
    }

    </script>
</body>
</html>


