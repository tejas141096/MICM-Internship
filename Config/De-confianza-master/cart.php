<?php
session_start();
if(!isset($_SESSION['customer'])){
  echo "<script>alert('You will have to login first and select your item again later.WE ARE SORRY FOR YOUR INCONVIENCE!');</script>";
  echo "<script>window.location.assign('http://localhost/e-commerce/login/index.php');</script>";
}
else{
set_include_path('C:\xampp\php\pear\PEAR\Config.php');
$conn=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($conn,"yashi")or die("Database not present");
$image=$_REQUEST['id'];
$customer=$_SESSION['customer'];
$table=$_SESSION['category'];
$query1="insert into ".$customer."(category,item_image)values('$table','$image');";
$result1=mysqli_query($conn,$query1);
// $_SESSION['image']=$image;
echo "<script>window.location.assign('http://localhost/e-commerce/shoppingcart.php');</script>";
}
?>