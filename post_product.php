<?php
session_start();
include('config.php');
$pname=mysqli_escape_string($con,strip_tags($_POST['pname']));
$cname=mysqli_escape_string($con,strip_tags($_POST['cname']));
$price=mysqli_escape_string($con,strip_tags($_POST['price']));
$features=mysqli_escape_string($con,strip_tags($_POST['features']));

$add="INSERT INTO products(pname,cname,price,features) VALUES('$pname','$cname','$price','$features')";
$add_result=mysqli_query($con,$add) or die(mysqli_error($con));
header("Location:login.php");
$_SESSION['pname']=$pname;
$_SESSION['cname']=$cname;
$_SESSION['price']=$price;
?>