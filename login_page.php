<?php
session_start();
include('config.php');
$email=mysqli_escape_string($con,strip_tags($_POST['email']));
$password=mysqli_escape_string($con,strip_tags($_POST['password']));
$login="SELECT * FROM signup WHERE email='$email' AND password='$password'";
$login_result=mysqli_query($con,$login) or die(mysqli_error($con));
if(mysqli_num_rows($login_result)==1){
	header("Location:main.php");
}
else{
	header("Location:login.php");
}
$_SESSION['email']=$email;
?>