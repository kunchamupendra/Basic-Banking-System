<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>











body{
margin :0px;
padding: 0px;

}

header{
background: url('https://image.freepik.com/free-vector/banking-service-background_127544-1086.jpg');
height: 500px;
-webkit-background-size: cover;
background-size: cover;
background-position: center;
position: relative;
}


.theme-text{
color: white;
text-align: center;
 display: inline-block;
margin-top: 150px;
margin-left: 300px;
font-size: 40px;
font-family: Lucida Handwriting;
}



</style>


</head>


<body>


<?php 
include 'navbar.php';
?>

<header>
<div class="theme-text">
<p>Welcome</p>
<p>to</p>
<p>Sparks Bank</p>
</div>
</header>
<h1 style="text-align: center; font-family: Lucida handwriting; font-size: 40px; margin-top: 20px; color: orange;">Our Features</h1> 
<div class="new">


<div class="container" style="margin-top: 60px; ">
<div class="row">
<div class="col-sm-4">
<img src="man.png" style="width:170px;">
<h1></h1>
<a href="transfermoney.php" class="btn btn-primary btn-lg" style="margin-left: 25px; margin-top: 10px;"> View Customers</a>
</div>
<div class="col-sm-4">
<img src="transfer.png" style="width:170px;">
<h1></h1>
<a href="transfermoney.php" class="btn btn-primary btn-lg" style="margin-left: 25px; margin-top: 10px;"> Transfer Money ></a>
</div>
<div class="col-sm-4">
<img src="transactionhistory.png" style="width:170px;">
<h1></h1>
<a href="transactionhistory.php" class="btn btn-primary btn-lg" style="margin-left: 25px; margin-top: 10px;"> Transaction Details</a>
</div>
</div>



<div class="container" style="width: 350px; height: 250px; margin-top: 30px;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://image.freepik.com/free-vector/online-banking-background-design_1300-132.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="https://image.freepik.com/free-vector/banking-background-design_1223-62.jpg"  style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://image.freepik.com/free-vector/money-background-design_1212-560.jpg" style="width:100%;">
      </div>
    </div>

   
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<?php
include('footer.html');
?>




</body>
</html>