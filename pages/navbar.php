
<script>
  $('#nav').affix({
        offset: {
          top: $('header').height()
        }
  });
</script>
<!-- Begin Navbar -->
<nav id="myNav" class="navbar navbar-inverse" data-spy="affix" role="navigation">
  <div class="container">
    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="glyphicon glyphicon-bar"></span>
      <span class="glyphicon glyphicon-bar"></span>
      <span class="glyphicon glyphicon-bar"></span>
    </a>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li class="nav_logo">
            <a class="navbar-brand" href="#">
                <img id="logo" src="images/logo.png" alt="logo" class="img-circle" alt="#"/>
            </a>
        </li>
        <li><a class="nav_list_left" href="#section1">PRODUITS</a></li>
        <li><a class="nav_list_left" href="#section2">DEVENIR PARTENAIRE</a></li>
        <li><a class="nav_list_left" href="#section3">OU SOMMES NOUS?</a></li>
        <li><a class="nav_list_left" href="#section4">EQUIPE</a></li>
        <li><a class="nav_list_left" href="#section5">BLOG</a></li>
        <li><a class="nav_list_left" href="#section6">CONTACT </a></li>
      </ul> 
      <ul>
        <li>
          <a class="btn btn-lg navbar-right">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
  </div>
</nav>
