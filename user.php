<?php 
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: adminlogin.php");
}
else
{?>
<html>
<?php require 'navbar.php';?>
    <head><title>user</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
<div id="logo">
    <center>
   <div id='userindex'>
<div class='userdiv' >

<p>username</p>
    </div>
    <div class='emaildiv'>
        email
    </div>
    <div class='passworddiv'>
        password
    </div>
    <div class="deletediv">Action</div>
</div>
</center>
<?php include 'userdatabaseconnect.php';?>  
  <?php
 $result= $conn->query($sql);
  if($result->num_rows)
  {
   while($row=$result->fetch_assoc())
      {
   echo"  <center>
   <div class='user1index'>
   <form method='get' action='userinfo.php'>
<div class='userdiv'>

<input type='text' name='username' value='".$row["name"]."' readonly style='width:100%;height:100%;'>
    </div>
    <div class='emaildiv'>
    <input type='text' name='useremail' value='".$row["email"]."' readonly style='width:100%;height:100%;'>
    </div>
    <div class='passworddiv'>
    <input type='text' name='userpassword' value='".$row["password"]."' readonly style='width:100%;height:100%;'>
    </div>
 
    <div class='deletebtndiv'>
    <input type='submit' name='infobtn' value='INFO' style='width:100%;height:100%;'>
    </div>
    </form>
    <form method='POST'>
    <div class='deletebtndiv'>
    <input type='submit' name='deletebtn' value='Delete' style='width:100%;height:100%;'>
    <input type='hidden' name='userid' value='".$row["userid"]."'>
    <input type='hidden' name='deleteuser' value='".$row["name"]."' >
    </div>
    </form>
</div>
</center>";
$usercount++;

      }
  }
  
  ?>
  <?php
  if(isset($_POST["deletebtn"]))
  {
    $deleteuser=$_POST["deleteuser"];
    echo $deleteuser;
  $userid=$_POST["userid"];
  $conn1=mysqli_connect("localhost","root","","routes");
  $sql1="DELETE FROM signupform WHERE userid='$userid'";
  session_start();
  unset($_SESSION['username']);
if ($conn1->query($sql1) === TRUE) {
   
  }
   else {
    
  }
  $conn2=mysqli_connect("localhost","root","","routes");
  $sql2="DELETE FROM ticket WHERE name='$deleteuser'";
  if ($conn2->query($sql2) === TRUE) {
   echo"<script>window.location.href='user.php'</script>";
  }
   else {
    
  }
  }
  ?>
</div>
</body>
<?php require 'footer.php';?>
</html>
<?php } ?>

