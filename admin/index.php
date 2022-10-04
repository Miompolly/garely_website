<?php
include 'dbconnect.php';
error_reporting(0);
session_start();
if(isset($_SESSION['fname']) && $_SESSION['lname']){
  header("location:dashboard.php");
}
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $sql="SELECT * FROM users WHERE email='$email' AND pasword='$password'";
  $result=mysqli_query($con,$sql);
  if($result->num_rows>0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['fname']=$row['fname'];
    $_SESSION['lname']=$row['lname'];

    header("location:dashboard.php");
  }else{
    echo "<script>alert('Incorect Email or password ???')</script>";
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


<a id="contactus">


<section class="my-4">
<div class="py-4">
  <h2 class="text-center">Login Form Below</h2>
</div>
<div class="w-50 m-auto">
<form action="" method="POST">


<div class="form-group">
  <label for="">Email  :</label>
  <input type="email" name="email" id="" class="form-control" required>
</div>
<div class="form-group">
  <label for="">Password  :</label>
  <input type="password" name="password" id="" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary btn-log btn-block" name="submit">Login</button>
<p>Don't have account ?  <a href="register.php">Create Account Here</a></p>
</form>

</div>
</div>

</section>
</a>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https:/cdnjs.cloudeflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>