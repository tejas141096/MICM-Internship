<?php
session_start();
if(session_destroy())
{
//header("location:http://localhost/e-commerce/index.php");
echo "<script>window.location.assign('http://localhost/e-commerce/first.php');</script>";
}
?>