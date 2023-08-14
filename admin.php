<?php 
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: adminlogin.php");
}
else
{?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    .myclass
{
    margin-top:5%;
    margin-left:5%;
    border:5px solid white;
    width:20%;
    height:20%;
    color:white;
    float:left;
    border-radius: 21px;
    background-color: black;
   
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.306);;
}
.delete
{
    background-color:red;
    width:40%;
    height:20%;
}
.delete:hover
{
  border-radius:21px;  
}
.addbutton
{
    margin-top:9%;
    background-color:lightblue;
    width:5%;
    height:6%;
margin-left:5%;
   
}
.addbutton:hover
{
    border-radius:21px;
}
</style>
</head>
<?php
include 'navbar.php';?>
<?php
$admincount=0;
$conn=mysqli_connect('localhost','root','','routes');
$sql="SELECT*from admin";
  $result=$conn->query($sql);
  while ($row = $result->fetch_assoc())
  {
  echo"
  <form method='post' >
        <div  class='myclass'  >
        <center>
        <i class='fa fa-user-circle-o' style='font-size:75px;color:white;'></i><br>
      <label>admin name:</label>
      ".$row["name"]."<br>
      <label>id:</label>
      ".$row["id"]."<br>
      <input type='hidden' name='adminid' value='".$row["id"]."'>
      <input type='submit' value='delete' name='admindelete' class='delete'>
</center>
</div>
</form>

";
$admincount++;
  }
  echo"<div>
<a href='addadmin.php'><input type='button' value='AddAdmin' class='addbutton' ></a>
</div>";
?>
<?php
if(isset($_POST["admindelete"]))
{
    $id=$_POST["adminid"];
   
    $conn1=mysqli_connect('localhost','root','','routes');
$sql1="DELETE from admin WHERE id='$id'";
if ($conn1->query($sql1) === true) 
{
    
    unset($_SESSION['admin']);
    header("Location: admin.php"); 
} 
else 
{
   
}
   
}
?>
<?php } 
$_SESSION["adminnumber"]=$admincount
?>
