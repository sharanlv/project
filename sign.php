<?php
$connect=mysqli_connect("localhost","root","","vintage");
if(isset($_POST['submit_btn'])){
  $firstname=$_POST['username'];
   $password=$_POST['password'];
   
$q= "select * from login where username='$firstname' AND password='$password'";
$result=mysqli_query($connect,$q);
$rows=mysqli_num_rows($result);
if($rows == 1){
	 header("Location:mini.php");
	}
	elseif ($firstname=='admin' && $password=='root')
  header("Location:admin.php");
  else{
		 echo "<script> alert('invalid username or password')</script>" ;
	}


}
?>



<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-image: url('images/back2.jpg');
			background-repeat: no-repeat;
			 background-size: 100% 125%;
			}
	</style>
	<title></title>
</head>
<body>
	<p style="color:white;text-align: center;font-size: 60px;margin-top: 100px">OPEN SOURCE HARDWARE</p>
<br><br><br>
<form style="margin-left: 220px;" method="POST" action="sign.php" >
	<p style="color:white;font-size: 20px;">LOGIN</p>
 <br>
  <input style="height: 25px;border-radius: 20px;border:3px solid gray" type="text"  placeholder="username" name="username" required="*" >
  <br><br><br>
  <input   style="height: 25px;border-radius: 20px;border:3px solid gray"  type="password" placeholder="password" name="password" required="*">
  <br><br><br>
<button name="submit_btn" style="color:black;background-color: white;border:3px solid gray;border-radius: 10px;height: 30px;">Login</button>
</form>
	


</body>
</html>
