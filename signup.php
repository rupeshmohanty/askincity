<?php
include('config.php');
$fname=mysqli_escape_string($con,strip_tags($_POST['fname']));
$lname=mysqli_escape_string($con,strip_tags($_POST['lname']));
$email=mysqli_escape_string($con,strip_tags($_POST['email']));
$password=mysqli_escape_string($con,strip_tags($_POST['password']));

$duplicate="SELECT * FROM signup WHERE email='$email' AND password='$password'";
$duplicate_result=mysqli_query($con,$duplicate) or die(mysqli_error($con));
if(mysqli_num_rows($duplicate_result)==1){
	echo "<script>
		alert('Email id exists already!!');
	</script>";
	header("Location:login.php");
}
elseif(strcmp($password,$cpassword)==0){
	echo "<script>
		alert('Passwords dont match!');
	</script>";
	header("Location:login.php");
}
else{
	$signup="INSERT INTO signup(fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
	$signup_result=mysqli_query($con,$signup) or die(mysqli_error($con));
	header("Location:success.php");
}
$_SESSION['fname']=$fname;
?>