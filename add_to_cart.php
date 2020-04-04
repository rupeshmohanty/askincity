<?php
        session_start();
        include('config.php');
        $email=$_SESSION['email'];
        $pname=$_SESSION['pname'];
        $cname=$_SESSION['cname'];
        $price=$_SESSION['price'];
        $add="INSERT INTO cart(pname,cname,price,email) VALUES('$pname','$cname','$price','$email')";
        $add_result=mysqli_query($con,$add) or die(mysqli_error($con));
        header('Location:cart.php');
    ?>