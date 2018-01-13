<?php
session_start();
$connect=mysqli_connect("localhost","root","","vintage");

if(isset($_POST['submit_btn'])){
  $name=mysqli_real_escape_string($connect,$_POST['name']);
  $email=mysqli_real_escape_string($connect,$_POST['email']);
   $phone=mysqli_real_escape_string($connect,$_POST['phone']);
 $address=mysqli_real_escape_string($connect,$_POST['address']);

$q=mysqli_query($connect,"INSERT INTO customer (name,email,phone,address) VALUES('$name' , '$email' , '$phone' , '$address')");
if($q){
 echo "<script> alert('Thank you for purchasing')</script>" ;
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
  <br>
  <p style="margin-left: 35%">please enter your details</p>
  <br>
  <br>
  <form style="margin-left: 35%" method="POST"  action="mini1.php">
 <div class="glyphicon glyphicon-user"></div>  <input style="border: 1.5px solid DimGray;" type="text" name="name" required="*" placeholder="name" >


<br><br><br>
<div class="glyphicon glyphicon-envelope"></div> <input style="border: 1.5px solid DimGray;"  type="text" name="email" required="*"  placeholder="email">
<br><br><br>
 <div class="glyphicon glyphicon-phone"></div> <input style="border: 1.5px solid DimGray;"  type="text" name="phone" required="*"  placeholder="phone">
<br><br><br>
 <div class="glyphicon glyphicon-phone"></div> <input style="border: 1.5px solid DimGray;"  type="text" name="address" required="*"  placeholder="address"><br><br>
<br><br><br>
<button name="submit_btn">SUBMIT</button>

</form> 
<br>

