<?php

$connect=mysqli_connect("localhost","root","","vintage");


?>

  


<!DOCTYPE html>
<html>
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

  <h1><img style="margin-left: 200px;max-height: 80px;max-width: 80px;"  src="images/logo.png"><span styl><b>O</b><span style="font-size: 20px;">PEN</span>  <b>S</b><span style="font-size: 20px">OURCE</span> <b>H</b><span style="font-size: 20px;">ARDWARE</span></h1>
  <br><br>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OS HARDWARE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="mini.php">Home</a></li>
      <li><a href="mini3.php">Request</a></li>
       <li><a href="sign.php" name="logout">LOG OUT</a></li>
      <li style="margin-left: 700px"><a href="cart.php">YOUR CART</a></li>
        
    </ul>
  </div>
</nav>
  
  <br>
    <p>OUR PRODUCTS</p><br><br><br><br>
  <hr style='border:1px dotted black'>
  <br><br>
 
<?php
$sql="SELECT * FROM store";
$result=mysqli_query($connect,$sql)or die(mysqli_error($connect));
while($row=mysqli_fetch_array($result)){
 
     $desc=$row['description'];
      $image=$row['images'];
    $price=$row['price'];
    $sup_id=$row['sup_id'];
    echo " <div class='row'>
    <div class='col-xs-3'>
   <img style='max-height: 250px;max-width: 250px;'  src='$image'>
 </div>
    <div class='col-xs-3'>
      <p style='font-size: 17px'><b>DESCRIPTION</b></p>
    <p>$desc</p></div>
     <div class='col-xs-3'><b style='font-size: 17px'>PRICE:</b><br> Rs $price</div>
     <div class='col-xs-3'>
        <button style='max-width: 200px;background-color: black;border-radius: 15px;border-color: black'>  <a href='mini.php?add_cart=$sup_id'><span style='color:white'>ADD TO CART</span></button></a>


     </div>
   </div>
   <hr style='border:1px dotted black'>
";

}
?>
<?php

if(isset($_GET['add_cart'])){
 $p_id=  $_GET['add_cart'];
$sql="SELECT * FROM store where sup_id='$p_id'";
$result=mysqli_query($connect,$sql)or die(mysqli_error($connect));
$row=mysqli_fetch_array($result);

                 $sup_id=  $row['sup_id'];
         
                 $hard_id=  $row['hard_id'];
                $description= $row['description'];
                $pro_image = $row['images'];
                $pro_price= $row['price'];
                $q="INSERT INTO `vintage`.`cart` (`sup_id`, `hard_id`, `description`, `price`, `image`)
        VALUES (  $p_id, $hard_id, ' $description',  $pro_price, ' $pro_image')";
                if(mysqli_query($connect,$q)){
                    echo "<script> alert('product successfully added')</script>" ;
                }
             else{
              echo "<script> alert('product is already been added')</script>" ;
                }

           }
         
         
            
?>
<br>
  