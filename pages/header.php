<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les boites de comm'</title>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Logo patientez avant le chargement de la page -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery('#loading').hide();
            $('#extracontrols').css('display', 'block');
            $("#logo_header").fadeIn(7000);
            $(".texte_header").typed({
              strings: ["^4000 <h2>Envie de mettre du peps dans votre vie de couple ou de famille ?</h2>"],
              showCursor: false
            });
        });
    </script>

    <!-- Apparition progressive du logo -->

    <!-- Ecriture progressive du texte -->
  </head>
  <body>
  <div id="section0"></div>
   <div id="loading">
    <h1></h1>
        <img src="images/Preloader_10.gif" alt="Loading..." />
   </div>
   <div id="extracontrols">
      <header>
        <div class="row">
          <img class="photoheader" src="images/bandeau.jpg" alt="photo_header"/>
          <img id="logo_header" src="images/logo.png" alt="logo_boite_de_comm"/>
          <div class="texte_header"></div>
        </div>
      </header>