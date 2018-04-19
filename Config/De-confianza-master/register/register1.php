<?php
set_include_path('C:\xampp\php\pear\PEAR\Config.php');
$conn=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($conn,"yashi")or die("Database not present");
@$a=$_POST['category'];
@$b=$_POST['name'];
@$c=$_POST['email'];
@$d=$_POST['contact'];
@$e=$_POST['username'];
@$f=$_POST['password'];
@$g=$_POST['confirm_password'];
@$i=$_POST['country'];
switch ($a)
{
  case 'supplier':
		$query1="insert into supplier(name,email,contact,username,password,confirmpassword,country)values('$b','$c','$d','$e','$f','$g','$i')";
		$result=mysqli_query($conn,$query1);
		break;
  case 'customer':
    $query1="insert into customer(name,email,contact,username,password,confirmpassword,country)values('$b','$c','$d','$e','$f','$g','$i')";
    $query2="CREATE TABLE ".$e."(category varchar(30),item_image varchar(500))";
		$result=mysqli_query($conn,$query1);
    $result1=mysqli_query($conn,$query2);
    print '<script>alert("HAPPY SHOPPING!!Please Continue Shopping.......");</script>';
		break;
  default:
    echo "invalid";
    break;
}
print '<script>alert("Successful Registration");</script>';
echo "<script>window.location.assign('http://localhost/e-commerce/first.php');</script>";
?>