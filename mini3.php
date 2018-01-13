<?php

$connect=mysqli_connect("localhost","root","","vintage");


if(isset($_POST['submit_btn'])){
  
    $name=mysqli_real_escape_string($connect,$_POST['name']);
  $price=mysqli_real_escape_string($connect,$_POST['price']);
   $desc=mysqli_real_escape_string($connect,$_POST['description']);
 $phone=mysqli_real_escape_string($connect,$_POST['phone']);

$q=mysqli_query($connect,"INSERT INTO admin (name,price,description,phone) VALUES('$name' , '$price' , '$desc' , '$phone')");
if($q){
  echo "<script> alert('your request has been sent')</script>" ;
}
else{
   echo ("Error:" . mysqli_error($connect));
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
  img{
  	max-width: 100px;
  	max-width: 100px;
  }

  </style>
  <title></title> 
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	 <br>
  <h1><img style="margin-left: 200px;max-height: 80px;max-width: 80px;"  src="images/logo.png"><span styl><b>O</b><span style="font-size: 20px;">PEN</span>  <b>S</b><span style="font-size: 20px">OURCE</span> <b>H</b><span style="font-size: 20px;">ARDWARE</span></h1>
  <br><br>
    <nav class="navbar navbar-inverse"s>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OS hardware</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="mini.php">Home</a></li>
      <li class="active"><a href="mini3.php">Request</a></li>
       <li><a href="sign.php">LOG OUT</a></li>
    
      <li style="margin-left: 700px"><a href="cart.php">YOUR CART</a></li>
    </ul>
  </div>
</nav>

	 <form style="margin-left: 35%" method="POST"  action="mini3.php">
  <div class="glyphicon glyphicon-file"></div> <input style="border: 1.5px solid DimGray;" type="text" name="name" required="*" placeholder="product name" >


<br><br><br>
 <div class="glyphicon glyphicon-th-list"></div> <input style="border: 1.5px solid DimGray;"  type="text" name="price" required="*"  placeholder="price range ">
<br><br><br>
 <div class="glyphicon glyphicon-phone"></div> <input style="border: 1.5px solid DimGray;height: 75px"  type="text" name="description" required="*"  placeholder="product description">
<br><br><br>
 <div class="glyphicon glyphicon-phone"></div> <input style="border: 1.5px solid DimGray;"  type="text" name="phone" required="*"  placeholder="phone"><br><br>
<input type="submit" name="submit_btn">
<br><br><br>


</form> 
<br>

