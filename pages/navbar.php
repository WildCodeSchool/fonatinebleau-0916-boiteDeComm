<nav class="mynav navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="title_responsive">
        <img src="images/logo.png" alt="logo" class="logo"/>
        <h1>LES BOITES DE COMM'</h1>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a class="nav_list_left" href="#section1">PRODUITS</a></li>
        <li><a class="nav_list_left" href="#section2">DEVENIR PARTENAIRE</a></li>
        <li><a class="nav_list_left" href="#section3">OU SOMMES NOUS?</a></li>
        <li><a class="nav_list_left" href="#section4">EQUIPE</a></li>
        <li><a class="nav_list_left" href="#section5">BLOG</a></li>
        <li><a class="nav_list_left" href="#section6">CONTACT</a></li>
        <li><a class="nav_list_left" href="#">PANIER</a></li>
      </ul>
      <ul class="nav_bar_rigth">
        <li>
          <a class="btn btn-lg panier" href="#">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script>
  $(document).ready(function(){
    $(window).bind('scroll', function() {
      var navHeight = $( window ).height() - 60;
      if ($(window).scrollTop() > navHeight) {
        $('.mynav').addClass('navbar-fixed-top');
      }
      else if ($(window).scrollTop() > 0) {
        $('.mynav').removeClass('navbar-fixed-bottom');
      }
      else {
        $('.mynav').removeClass('navbar-fixed-top');
        $('.mynav').addClass('navbar-fixed-bottom');
      }
    });
  });
</script>
