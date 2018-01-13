<?php
$connect=mysqli_connect("localhost","root","","vintage");

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
   <h1><img style="margin-left: 200px;max-height: 80px;max-width: 80px;"  src="images/logo.png"><span styl><b>O</b><span style="font-size: 20px;">PEN</span>  <b>S</b><span style="font-size: 20px">OURCE</span> <b>H</b><span style="font-size: 20px;">ARDWARE</span></h1>
  <br><br>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OS hardware</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="mini.php">Home</a></li>
      <li><a href="mini3.php">Request</a></li>
 <li><a href="sign.php">LOG OUT</a></li>
     
     
      <li class="active" style="margin-left: 700px"><a  href="cart.php">YOUR CART</a></li>
    </ul>
  </div>
</nav>
 <br><br>
	<p  class="glyphicon glyphicon-shopping-cart"  style="font-size: 30px"> YOUR CART</p>
	<table style="margin-left: 200px;margin-top: 100px" width="600" border="1" cellpadding="1" cellspacing="1">

		<tr>
			<th>IMAGE</th>
			<th>DESCRIPTION</th>
				<th>PRICE</th>
		  <th>OPTION</th>
	</tr>
	<?php
	$sql="SELECT sup_id,description,price,image FROM cart";
$result=mysqli_query($connect,$sql)or die(mysqli_error($connect));

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$sup_id=$row['sup_id'];
	echo "<tr>";
		echo "<td>" ?> <img style="max-width: 100px;max-height: 100px" src="<?php echo$row['image']?>" > <?php "</td>";
		echo "<td>" .$row['description']. "</td>";
		echo "<td>" .$row['price']. "</td>";
		echo  "<td> <button style='margin-left: 30px;max-width: 200px;background-color: black;border-radius: 15px;border-color: black;'><a style='color:white' href='cart.php?remove=$sup_id'>DELETE</button></a> </td>";

		
	echo "</tr>";

}
	?>
	 <?php
            if(isset($_GET['remove'])){

                $p_id=  $_GET['remove'];

                 $sql="DELETE  FROM CART WHERE sup_id=$p_id";
                $run_query=mysqli_query($connect,$sql);
            }
      ?> 

	</table>
	<br>
	<br><br>
		 <button style="margin-left: 200px;max-width: 100px;">  <a href="mini1.php">PURCHASE</button></a> <button style="margin-left: 300px;max-width: 200px;">  <a href="mini1.php">UPDATE CART</button></a>
		 <br><br><br> 