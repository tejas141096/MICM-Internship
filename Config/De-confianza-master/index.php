<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>De Confianza</title>
    <!-- Bootstrap -->
    	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    	<link type="text/css" href="styleindex.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<center>
	<div class="wrapper">
    		<div class="panel" id="panel--left">
    			<img src="./images/door5.png" class="door">
    		</div>
    		<div class="shelf" id="grad">
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
    <div class="row">
    	<div class="col-md-4">
    		<a href="list.php?item=books">
    		<img src="./images/shelf1.jpg" class="box">
    		<img src="./images/books.png" id="things1" class="top"></a>
    	</div>
    	<div class="col-md-4">
    		<a href="list.php?item=clothes">
    		<img src="./images/shelf1.jpg" class="box">
    		<img src="./images/cloth.png" id="things2" class="top"></a>
   		</div>
   		<div class="col-md-4">
   			<a href="list.php?item=bags">
   			<img src="./images/shelf1.jpg" class="box">
   			<img src="./images/bags.png" id="things3" class="top"></a>
   		</div>
   	</div>

   	<div class="row">
    	<div class="col-md-4">
    		<a href="list.php?item=cosmetics">
    		<img src="./images/shelf1.jpg" class="box">
    		<img src="./images/beauty.png" id="things4" class="top"></a>
    	</div>
    	<div class="col-md-4">
    		<a href="list.php?item=shoes">
    		<img src="./images/shelf1.jpg" class="box">
    		<img src="./images/footwear.jpg" id="things5" class="top"></a>
   		</div>
   		<div class="col-md-4">
   			<a href="list.php?item=chocolates">
   			<img src="./images/shelf1.jpg" class="box">
   			<img src="./images/choco.png" id="things6" class="top"></a>
   		</div>
   	</div>

   	<div class="row">
    	<div class="col-md-4">
    		<a href="list.php?item=groceries">
    		<img src="./images/shelf1.jpg" class="box">
    		<img src="./images/grocery1.png" id="things7" class="top"></a>
    	</div>
    	<div class="col-md-4">
    		<a href="list.php?item=jewellery">
    		<img src="./images/shelf1.jpg" class="box">
    		<img src="./images/jewel1.png" id="things8a" class="top">
    		<img src="./images/jewel8.png" id="things8" class="top"></a>
   		</div>
   		<div class="col-md-4" >
   			<a href="list.php?item=mobiles">
   			<img src="./images/shelf1.jpg" class="box">
   			<img src="./images/mobile1.png" id="things9" class="top"></a>
   		</div>
   	</div>
</div> 
<div class="panel" id="panel--right">
    <img src="./images/door5.png" class="door">
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</center>
</body>
</html>