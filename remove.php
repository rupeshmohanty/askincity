<?php
session_start();
include('config.php');
$pname=$_SESSION['pname'];
$remove="DELETE FROM cart WHERE pname='$pname'";
$remove_result=mysqli_query($con,$remove) or die(mysqli_error($con));
header('Location:cart.php');
?>