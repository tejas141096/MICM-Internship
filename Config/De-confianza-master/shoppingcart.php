<!DOCTYPE html>
<?php
session_start();
set_include_path('C:\xampp\php\pear\PEAR\Config.php');
$conn=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($conn,"yashi")or die("Database not present");
$table1=$_SESSION['customer'];
$query="SELECT * from ".$table1."";
$result=mysqli_query($conn,$query);
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Shopping cart</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
      <link rel="stylesheet" href="stylecart.css">
</head>

<body>
  	<header id="site-header">
		<div class="container">
			<h1>Shopping cart <span>[</span> <em>Hello <?php echo $_SESSION['customer'];?>!!!</em><span class="last-span is-open">]</span></h1>
		</div>
	</header>

	<div class="container">

		<section id="cart"> 
<?php
while(@$row=mysqli_fetch_array($result))
{
  $image=$row['item_image'];
  $table2=$row['category'];
  $query1="SELECT * from ".$table2." where image='$image'";
  $result1=mysqli_query($conn,$query1);
while(@$row1=mysqli_fetch_array($result1))
{
	$img=$row1['image'];
	$name=$row1['name'];
  $desc=$row1['description'];
  $price=$row1['price'];
  $stock=$row1['stock'];
  echo"
			<article class='product'>
				<header>
					<a class='remove'>
						<img src=".$img." alt=".$name.">

						<h3>Remove product</h3>
					</a>
				</header>

				<div class='content'>

					<h1>".$name."</h1>

					<p>".$desc."</p>
				</div>

				<footer class='content'>
					<span class='qt-minus'>-</span>
					<span class='qt'>1</span>
					<span class='qt-plus'>+</span>

					<h2 class='full-price'>
						".$price."
					</h2>

					<h2 class='price'>
						".$price."
					</h2>
				</footer>
			</article>";
		}
	}
?>
		</section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <span>0000</span>Rs</h2>
				<h3 class="tax">Taxes (5%): <span>0000</span>Rs</h3>
				<h3 class="shipping">Shipping: <span>10.00</span>Rs</h3>
			</div>

			<div class="right">
				<h1 class="total">Total: <span>0000</span>Rs</h1>
				<a href="first.php"><input type="button" value="Checkout" class="btn" onclick="myfunction();"></a>
				<a href="index.php"><input type="button" class="btn" value="Continue shopping!"></a>
				<a href="logout.php"><input type="button" class="btn" value="LOGOUT"></a>	
			</div>
		</div>
	</footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/indexcart.js"></script>
    <script type="text/javascript">
    	function myfunction(){
    		alert("Thank You For Shopping with Us.");
    	}
    </script>

</body>
</html>
