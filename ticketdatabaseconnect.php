<?php

$noofticket=0;
$revenue=0;
$username="root";
$password="";
$hostname="localhost";
$database="routes";
$conn3= mysqli_connect($hostname,$username,$password,$database);
$sql3="SELECT * FROM ticket";
$result3= $conn3->query($sql3);
  if($result3->num_rows)
  {
   while($row=$result3->fetch_assoc())
      {
        $noofticket++;
        $revenue = $revenue + floatval($row['price']);
      }}
     
     
?>