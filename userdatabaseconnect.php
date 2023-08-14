<?php

$usercount=0;
$username="root";
$password="";
$hostname="localhost";
$database="routes";
$conn= mysqli_connect($hostname,$username,$password,$database);
$sql="SELECT * FROM signupform";
$result= $conn->query($sql);
  if($result->num_rows)
  {
   while($row=$result->fetch_assoc())
      {
        $usercount++;
      }}
?>