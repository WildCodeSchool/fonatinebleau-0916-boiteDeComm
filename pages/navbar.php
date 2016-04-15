
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
        <li>
            <a class="navbar-brand" href="#">
                <img id="logo" src="images/logo.png" alt="logo" class="img-circle" alt="#"/>
            </a>
        </li>
        <li><a style="margin-left:10px;" style="margin-right:15px;" href="#section1">PRODUITS</a></li>
        <li><a style="margin-left:10px;" style="margin-right:15px;" href="#section2">DEVENIR PARTENAIRE</a></li>
        <li><a style="margin-left:10px;" style="margin-right:15px;" href="#section3">OU SOMMES NOUS?</a></li>
        <li><a style="margin-left:10px;" style="margin-right:15px;" href="#section4">EQUIPE</a></li>
        <li><a style="margin-left:10px;" style="margin-right:15px;" href="#section5">BLOG</a></li>
        <li><a style="margin-left:10px;" style="margin-right:15px;" href="#section6">CONTACT </a></li>
      </ul> 
      <ul>
        <li>
          <a class="btn btn-lg navbar-right"style="background-color:grey" style="font-color: white;">
              
              <i class="fa fa-shopping-cart" aria-hidden="true" style="size:70px;">
              </i>
          </a>
        </li>
      </ul>
  </div>
</nav>
