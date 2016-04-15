<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.0.3/jquery.cycle.all.js"></script>
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
    
    <!-- Logo patientez avant le chargement de la page -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery('#loading').hide();
        });
    </script>

    <!-- Apparition progressive du logo -->
    <script type="text/javascript">
       $(document).ready(function(){
          $("#logo_header").delay(8000).fadeIn(10000);
       });
    </script>

    <!-- Ecriture progressive du texte -->
    <script>
      $(function(){
        $(".texte_header").typed({
          strings: ["^11000 <h2>LE JEU QUI DONNE DE LA SAVEUR AU QUOTIDIEN</h2>"]
        });
      });
    </script>
  </head>
  <body>
   <div id="loading">
        <img src="images/Preloader_10.gif" alt="Loading..." />
   </div>
    <!-- Wrap all page content here -->
      <header>
        <div class="row2">
          <img class="photoheader" src="images/bandeau.jpg">
          <img id="logo_header" src="images/logo.png" alt="logo_boite_de_comm">
          <div class="texte_header"></div>
        </div>
      </header>
