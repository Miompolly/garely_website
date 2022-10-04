<?php

require('dbconnect.php');

error_reporting(0);
session_start();

if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
date_default_timezone_set('Africa/Kigali');
$date=date('Y-m-d h:i:s a',time());

if($password == $cpassword){
$sql="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($con,$sql);
if(!$result->num_rows>0){
$sql="INSERT INTO users(fname,lname,email,pasword)VALUES('$fname','$lname','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
    echo "<script>alert(' Woow ! User successfully Registered')</script>";
}else{
    echo "<script>alert(' Something went wrong')</script>";  
}
}else{
    echo "<script>alert(' User is already exist!!!')</script>";
}

}else{
    echo "<script>alert(' Password didn't Match!!!')</script>";
   
}




}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Garly-Register</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
        <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact Us</a>
      </li>
    
</ul>
   
  </div>
</nav>



<section class="my-4">
<div class="py-4">
  <h2 class="text-center">Register Form Below</h2>
</div>
<div class="w-50 m-auto">
<form action="" method="POST">


<div class="form-group">
  <label for="">First Name  :</label>
  <input type="text" name="fname" id="" class="form-control" required>
</div>

<div class="form-group">
  <label for="">Last Name  :</label>
  <input type="text" name="lname" id="" class="form-control" required>
</div>


<div class="form-group">
  <label for="">Email  :</label>
  <input type="email" name="email" id="" class="form-control" required>
</div>
<div class="form-group">
  <label for="">Password  :</label>
  <input type="password" name="password" id="" class="form-control" required>
</div>
<div class="form-group">
  <label for="">Confirm Password  :</label>
  <input type="password" name="cpassword" id="" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary btn-log btn-block" name="submit">Create Account</button>
<p>Have Account?  <a href="index.php">Login Here</a></p>
</form>

</div>
</div>

</section>



    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https:/cdnjs.cloudeflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>