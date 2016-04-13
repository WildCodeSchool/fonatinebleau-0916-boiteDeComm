<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- SCRIPT ANIMATION -->

    <script type="text/javascript">
    $(document).ready(function(){
        $("#myNav").affix({
            offset: { 
                top: 195 
            }
        });
    });
    </script>

    <script>$('#myNav').affix({
          offset: {
            top: $('header').height()-$('#myNav').height()
          }
    });	
    </script>

    <script>$('body').scrollspy({ target: '#myNav' })


    /* smooth scrolling for scroll to top */
    $('.scroll-top').click(function(){
      $('body,html').animate({scrollTop:0},1000);
    })

    /* smooth scrolling for nav sections */
    $('#myNav .navbar-nav li>a').click(function(){
      var link = $(this).attr('href');
      var posi = $(link).offset().top;
      $('body,html').animate({scrollTop:posi},700);
    });
    </script>
  </head>
  <body>
    <!-- Wrap all page content here -->
      <header>
        <div class="row2">
          <img class="photoheader" alt="header" src="images/logoheader.jpg">
        </div>
      </header>
