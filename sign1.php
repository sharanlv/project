<?php
$connect=mysqli_connect("localhost","root","","vintage");
if(isset($_POST['submit_btn'])){
  $firstname=$_POST['username'];
   $email=$_POST['email'];
 $password=$_POST['password'];

$q=mysqli_query($connect,"INSERT INTO login (username,email,password) VALUES('$firstname'  , '$email' , '$password')");
if(!$q){
     echo ("Error:" . mysqli_error($connect));
}
else
	 header("Location:sign.php");


}



	


?>

<!DOCTYPE html>
<head>
	<style>
		body{
			background-image: url('images/back2.jpg');
			background-repeat: no-repeat;
			 background-size: 100% 100%;
			}
	</style>
	<title></title>
</head>
<body>

	<p style="color:white;text-align: center;font-size: 60px;margin-top: 100px">OPEN SOURCE HARDWARE</p>
<br><br><br>


<form style="margin-left: 220px;" method="POST" action="sign1.php">
	<p style="color:white;font-size: 20px;">REGISTER</p>
 <br>
  <input style="height: 25px;border-radius: 20px;border:3px solid gray" type="text"  placeholder="username" name="username" required="*" >
  <br><br><br>
  <input   style="height: 25px;border-radius: 20px;border:3px solid gray"  type="email" placeholder="email" name="email" required="*">
  <br><br><br>
   <input   style="height: 25px;border-radius: 20px;border:3px solid gray"  type="password" placeholder="password" name="password" required="*">
  <br><br><br>
 
 <span style="color:white;margin-right: 10px;">Already a member?<a  id="sign" style="color:white" href="sign.php">Log in</a></span> <button name="submit_btn" style="color:black;background-color: white;border:3px solid gray;border-radius: 10px;height: 30px;">Register</button>

</form>
<br><br>


</body>
</html>

	
