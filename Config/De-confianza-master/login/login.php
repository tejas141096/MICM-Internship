<?php
session_start();
set_include_path('C:\xampp\php\pear\PEAR\Config.php');
$conn=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($conn,"yashi")or die("Database not present");
@$a=$_POST['username'];
@$b=$_POST['password'];
$error='';
$query="select * from customer where username='".$a."' and password='".$b."'";
$query1="select * from supplier where username='".$a."' and password='".$b."'";
$result=mysqli_query($conn,$query);
@$row=mysqli_num_rows($result);
$result1=mysqli_query($conn,$query1);
@$row1=mysqli_num_rows($result1);
if($row==1)
{
$_SESSION['customer']=$a;
header("location:http://localhost/e-commerce/shoppingcart.php");
}
elseif ($row1==1)
{ 
$_SESSION['supplier']=$a;
header("location:http://localhost/e-commerce/register/additem.php");
}
else {
 	print'<script>alert("Invalid Username or Password. Please try again. ");</script>';
 	echo "<script>window.location.assign('http://localhost/e-commerce/login/index.php');</script>";
 } 
?>