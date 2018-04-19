<?php
set_include_path('C:\xampp\php\pear\PEAR\Config.php');
$conn=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($conn,"yashi")or die("Database not present");
@$a=$_POST['category'];
@$b=$_POST['name'];
@$c=$_POST['description'];
@$d=$_POST['quality'];
@$e=$_POST['supplier'];
@$f=$_POST['stock'];
@$g=$_POST['price'];
@$h=$_POST['image'];
switch ($a)
{
  case 'book':
  		@$i="./images/books/".$h;
		$query1="insert into book(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'dresses':
  		@$i="./images/dress/".$h;
    	$query1="insert into dresses(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'bags':
    	@$i="./images/bags/".$h;
    	$query1="insert into bags(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'cosmetics':
    	@$i="./images/ct/".$h;
    	$query1="insert into cosmetics(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'shoes':
  		@$i="./images/shoes/".$h;
    	$query1="insert into shoes(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'chocolates':
  		@$i="./images/choco/".$h;
    	$query1="insert into chocolates(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'groceries':
  		@$i="./images/groc/".$h;
    	$query1="insert into groceries(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'jwellery':
  		@$i="./images/jw/".$h;
    	$query1="insert into jwellery(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'mobile':
  		@$i="./images/mobiles/".$h;
    	$query1="insert into mobile(name,description,quality1,supplier_name,stock,price,image)values('$b','$c','$d','$e',$f,$g,'$i')";
		$result=mysqli_query($conn,$query1);
		break;
  default:
    echo "invalid";
    break;
}
print '<script>alert("Item added");</script>';
echo "<script>window.location.assign('http://localhost/e-commerce/first.php');</script>";
?>