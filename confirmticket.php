<?php 
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: adminlogin.php");
}
else
{?>
<html>
<head><title>tickets</title>
<link rel="stylesheet" href="confirmticket.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php require 'navbar.php';?>
  <div id="logo">

  



<?php
include 'ticketdatabaseconnect.php';

$result4= $conn3->query($sql3);
  if($result4->num_rows)
  {
   while($row=$result4->fetch_assoc())
      {
   echo"
    
   <div id='ticketbody' class='block'>
   <center>
   <i class='fa fa-user-circle-o' style='font-size:75px;color:white;'></i><br>
   </center>
      <label for >name:</label>
      ".$row["name"]."
      <br>
     
      <label>source:</label>
      ".$row["source"]."<br>
      <label>destination:</label>
      ".$row["destination"]."<br>
      <label>date:</label>
      ".$row["date"]."<br>
      <label>departure at:</label>
    ".$row["time"]."<br>
      <label>bus number:</label>
     ".$row["busnumber"]."<br>
      <label>seats:</label>
    ".$row["seat"]."<br>
    <form method='post'>
      <input type='hidden' name='ticketid' value='".$row["ticketid"]."'>
      <center>
      <input type='submit' name='deleteticket' value='Delete'>
      </form>
      </center>
   
      
   </div>
   ";
      }}
     
?>
<?php

if(isset($_POST["deleteticket"]))
{
  $ticketid=$_POST["ticketid"];
$conn2=mysqli_connect("localhost","root","","routes");
$sql2="DELETE FROM ticket where ticketid='$ticketid'";

if ($conn2->query($sql2) === TRUE) {
  
} 
else 
{
  
}

}
?>

</div>
<?php require 'footer.php'?>
</body>
</html>
<?php }?>
