<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shopping Starts</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="js/modernizr.custom.js"></script>
  </head>
  <body>
<?php
session_start();
set_include_path('C:\xampp\php\pear\PEAR\Config.php');
$conn=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($conn,"yashi")or die("Database not present");
$var=$_GET['item'];
switch ($var)
{
  case 'books':
    echo "$var";
    $query1= "SELECT * from book";
    $_SESSION['category']='book';
    $result=mysqli_query($conn,$query1);
    break;
  case 'clothes':
    echo "$var";
    $query1= "SELECT * from dresses";
    $_SESSION['category']='dresses';
    $result=mysqli_query($conn,$query1);
    break;
  case 'bags':
    echo "$var";
    $query1= "SELECT * from bags";
    $_SESSION['category']='bags';
    $result=mysqli_query($conn,$query1);
    break;
  case 'cosmetics':
    echo "$var";
    $query1= "SELECT * from cosmetics";
    $_SESSION['category']='cosmetics';
    $result=mysqli_query($conn,$query1);
    break;
  case 'shoes':
    echo "$var";
    $query1= "SELECT * from shoes";
    $_SESSION['category']='shoes';
    $result=mysqli_query($conn,$query1);
    break;
  case 'chocolates':
    echo "$var";
    $query1= "SELECT * from chocolates";
    $_SESSION['category']='chocolates';
    $result=mysqli_query($conn,$query1);
    break;
  case 'groceries':
    echo "$var";
    $query1= "SELECT * from groceries";
    $_SESSION['category']='groceries';
    $result=mysqli_query($conn,$query1);
    break;
  case 'jewellery':
    echo "$var";
    $query1= "SELECT * from jwellery";
    $_SESSION['category']='jwellery';
    $result=mysqli_query($conn,$query1);
    break;
  case 'mobiles':
    echo "$var";
    $query1= "SELECT * from mobile";
    $_SESSION['category']='mobile';
    $result=mysqli_query($conn,$query1);
    break;
  default:
    echo "invalid";
    break;
}
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
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
	<div class="parallax"></div>

	<!-- WELCOME SECTION -->
    <div class="container">
      <div class="row mt">
      	<div class="col-lg-8">
	        <h1>We Provide Best Quality At Best Price!</h1>
      	</div>
      </div><!-- /row -->
    </div><!-- /.container -->
    
    <!-- PORTFOLIO SECTION -->
    <div id="portfolio">
    	<div class="container"
	    	<div class="row mt">
				<ul class="grid effect-2" id="grid">
        <li>
            
        </li>
<?php
while(@$row=mysqli_fetch_array($result))
{
  $image=$row['image'];
  $name=$row['name'];
  $desc=$row['description'];
  $price=$row['price'];
  $stock=$row['stock'];
  echo "<li><p><b>".$name."</b></p>
            <a href='localhost/e-commerce/details.html'>
             <img src=".$image." alt=".$name.">
            </a>
            <p>".$desc."<br><b>Price: $".$price."<br>Stock: ".$stock."</b></p>
            <input type='button' class='btn btn-info' value='ADD to CART' id='".$image."' onclick='myfunction(this.id);'></li>";
//}
?>
<script type="text/javascript">
  function myfunction(x){
      window.location='cart.php?id='+x;
    }
</script>
<?php 
}
?>
				</ul>
	    	</div><!-- row -->
	    </div><!-- container -->
    </div><!-- portfolio -->
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>
	<script>
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
	</script>
  </body>
</html>