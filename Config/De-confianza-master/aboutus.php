<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- start: CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="stylefirst.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    

    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB751WW_T6ajFmXhHqZVi8kOHzgcPVrssw"></script>
<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>
<body>
<div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="first.php"><img alt="Brand" src="./images/dc.png" height="30px" width="30px"></a>
      <a class="navbar-brand" href="first.php">De-Confianza</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" name="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Start Shopping &hearts;<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search Items <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="list.php?item=books" name="books">Books</a></li>
            <li><a href="list.php?item=clothes">Clothes</a></li>
            <li><a href="list.php?item=bags">Bags</a></li>
            <li><a href="list.php?item=cosmetics">Cosmetics</a></li>
            <li><a href="list.php?item=shoes">Shoes</a></li>
            <li><a href="list.php?item=chocolates">Chocolates</a></li>
            <li><a href="list.php?item=groceries">Groceries</a></li>
            <li><a href="list.php?item=jewellery">Jewellery</a></li>
            <li><a href="list.php?item=mobiles">Mobiles</a></li>
          </ul>
        </li>
        <li><a href="register/additem.php">Add Item</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login/index.php">Login</a></li>
        <li><a href="register/index.php">New User</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<!-- start: 6th Page - Team -->
  <div id="team" class="color white">
    
    <!--start: Container -->
    <div class="container">

      <!--start: Wrapper -->
      <div class="wrapper span12">

        <!-- start: Page Title -->
<div id="page-title">

  <div id="page-title-inner">

      <h2><span>Team</span></h2>

  </div>  

</div>
<!-- end: Page Title -->
<!-- start: Row -->
<div class="row-fluid">
  
  <div class ="span12">
    
    <!-- start: Team -->  
    <div id="team">
         <center>   
      <!-- start: Row -->
      <div class="row-fluid">
      
        <!-- start: About Member -->
        <div class="span3"> 
          <div class="team-name">De-Confianza</div>
          <div class="position">Member 1</div>
          <p>
            YASHI SUBA
          </p> 
        </div>
        <!-- end: About Member -->
        
        <hr class="clean visible-phone">
        <div class="span3">
        </div>
        <hr class="clean visible-phone">
        <div class="span3">
        </div>

        <!-- start: About Member -->
        <div class="span3"> 
          <div class="team-name">De-Confianza</div>
          <div class="position">Member 2</div>
          <p>
            SAMPADA SOVITKAR
          </p> 
        </div>
        <!-- end: About Member -->
        
        <hr class="clean visible-phone">
      
      </div>
      <!-- end: Row -->
        </center>
    </div>
    <!-- end: Team -->
    
  </div>  
  
</div>  
<!-- end: Row -->
      </div>
      <!-- end: Wrapper -->
    
    </div>
    <!--end: Container -->
    
  </div>
  <!-- end: 6th Page - Team -->
  
  <!-- start: 7th Page - Contact -->
  <!--<div id="mapBg"></div>-->
  <div id="contact" class="color blue transparent">
    
    <!--start: Container -->
    <div class="container">

      <!--start: Wrapper -->
      <div class="wrapper span12">

        
  
      <!-- start: Page Title -->
      <div id="page-title">

        <div id="page-title-inner">

            <h2><span>Contact</span></h2>

        </div>  

      </div>
      <!-- end: Page Title -->
      
      <!-- start: Row -->
      <div class="row-fluid">   
        
        <div class="span12">
          
          <!-- start: Contact Info -->
          <b>Our College</b><br>
          • Plot No.U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Marg, Vile Parle West, Mumbai, Maharashtra 400056;<br>
          • Contact Us:022 09876533.<br>
          • Phone: 7588205079.<br>
          • web: www.deconfianza.com.
          <!-- end: Contact Info -->

        
        </div>  
         <div id="map"></div>
      
      </div>
      <!-- end: Row -->
      
      <hr class="clean">
      
      <!-- start: Row -->
      <div class="row-fluid">   
      
        <!-- start: Map -->
        <div class="span6">
          

        </div>
        <!-- end: Map -->
        
        <div class="span6">
          
          <!-- starts: Google Maps -->
          
         
          <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
          <!-- end: Google Maps -->
        
        </div>  
      
      </div>
      <!-- end: Row -->

      </div>
      <!-- end: Wrapper -->
    
    </div>
    <!--end: Container -->
    
  </div>
  <!-- end: 7th Page - Contact -->

    <script>
      function initMap() {
        var uluru = {lat: 19.107531, lng: 72.837041};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxo-bnMBJw8t_VJqD9rNm3_xNowe4ykDY&callback=initMap">
    </script>

<footer>
    <div id="copyright">
      De-Confianza  &copy; 2017. Designed by Yashi &amp; Sampada!<img src="images/dc.png" alt="dC" style="margin-top:-4px" height="30px" width="30px">
    </div>
    <div id="social">
    <ul>
      <li><a href="http://facebook.com" rel="tooltip" title="Facebook" class="facebook"><img src="./images/fb.png" height="20px" width="35px"></a></li>
      <li><a href="http://twitter.com" rel="tooltip" title="Twitter" class="twitter"><img src="./images/twitter.png" height="20px" width="20px"></a></li>
      <li><a href="http://github.com" rel="tooltip" title="Github" class="github"><img src="./images/git.png" height="20px" width="30px"></a></li>
      <li><a href="http://linkedin.com" rel="tooltip" title="LinkedIn" class="linkedin"><img src="./images/in.png" height="20px" width="80px"></a></li>
      <li><a href="http://pinterest.com" rel="tooltip" title="Pintrest" class="pintrest"><img src="./images/pinterest.png" height="20px" width="20px"></a></li>
      <li><a href="http://vimeo.com" rel="tooltip" title="Vimeo" class="vimeo"><img src="./images/vimeo.png" height="20px" width="70px"></a></li>
      <li><a href="http://youtube.com" rel="tooltip" title="YouTube" class="youtube"><img src="./images/youtube.png" height="20px" width="30px"></a></li>
      <li><a href="mailto:yashisuba16ys@gmail.com" rel="tooltip" title="gmail" class="gmail"><img src="./images/gmail.png" height="20px" width="30px"></a></li>
    </ul>
    </div>  
  </footer> 
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/js/isotope.js"></script>
<script type="text/javascript" src="js/js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js/flexslider.js"></script>
<script type="text/javascript" src="js/js/carousel.js"></script>
<script type="text/javascript" src="js/js/fancybox.js"></script>
<script type="text/javascript" src="js/js/twitter.js"></script>
<script type="text/javascript" src="js/js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/js/excanvas.js"></script>
<script type="text/javascript" src="js/js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="js/js/custom.js"></script>