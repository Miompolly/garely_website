<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Garely</title>
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/arch5.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pexels-jack-krzysik-7753054.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pexels-luis-del-río-15286.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="nature">
<section class="my-4">
<div class="py-4">
    <h2 class="text-center">Nature</h2>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/natu.jpg" alt="" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/nature2.jpg" alt="" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/nature3.jpg" alt="" class="img-fluid pb-3">

    </div>
</div>


</section>
</a>
<a  id="architecture">

<section class="my-4">
<div class="py-4">
    <h2 class="text-center">Architecture</h2>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/arch1.jpg" alt="" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/arch2.jpg" alt="" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/arch3.jpg" alt="" class="img-fluid pb-3">

    </div>
</div>


</section>
</a>
<a id="travel">


<section class="my-4">
<div class="py-4">
    <h2 class="text-center">Travel</h2>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/trr.jpg" alt="" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/tr2.jpg" alt="" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
<img src="images/tr3.jpg" alt="" class="img-fluid pb-3">

    </div>
</div>


</section>
</a>

<a  id="aboutus">



<section class="my-4">
<div class="py-4">
  <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
  <h3 class="text-center">INES-RUHENGERI<br><br>
<p class="text-center">
We are passionate photographers interested in working with Nature , Architecture and Travel photography
</p>
</h3>
</div>

</section>

</a>
<a id="contactus">


<section class="my-4 bg-dark" style="background-color:black ; color:white">
<div class="py-4">
  <h2 class="text-center">Contact Us</h2>
</div>
<div class="w-50 m-auto">
<form action="contactus.php" method="POST">

<div class="form-group">
  <label for="">Names  :</label>
  <input type="text" name="form-names" id="" class="form-control" required>
</div>
<div class="form-group">
  <label for="">Email  :</label>
  <input type="email" name="form-email" id="" class="form-control" required>
</div>
<div class="form-group">
  <label for="">Phone Number  :</label>
  <input type="text" name="form-phone" id="" class="form-control" required>
</div>
<div class="form-group">
  <label for="">Message  :</label>
  <textarea rows="3" cols="" name="form-message" class="form-control" required></textarea>

  
</div>
<button type="submit" class="btn btn-success">Submit</button>

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