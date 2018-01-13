
<?php

$connect=mysqli_connect("localhost","root","","vintage");
?>
<!Doctype html>
<body>
<table style="margin-left: 200px;margin-top: 100px;" width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>NAME</th>
      <th>PRICE</th>
        <th>DESCRIPTION</th>
        <th>PHONE</th>
        <th></th>
  </tr>

<h2><b>You have a request from customer</b></h2>
<?php
  
$sql="SELECT * from admin";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  echo "<tr>";
    echo "<td>" .$row['name']. "</td>";
    echo "<td>" .$row['price']. "</td>";

    echo "<td>"  .$row['description']."</td>";
   echo "<td>"  .$row['phone']."</td>";
  
 
echo "</tr>";



}
  ?> 
</body>
 </table>
  <br>
  <br>
<br>
  <br><br><br>