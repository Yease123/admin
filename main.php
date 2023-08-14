<?php 
session_start();
if(!isset($_SESSION["admin"]))
{
    header("Location: adminlogin.php");
}
else
{?>
<html>
    <head><title>OBTRS</title>
       
    <link rel='stylesheet' href='main.css'>
   
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    </head>
    <body>
        <?php include 'navbar.php';?>
        <div id='logo'>
       
      
       
       <?php require 'mainbody.php';?>
    
    </div>
   
   <?php include 'footer.php';?>
</body>
<script src='index.js'>

   </script>
</html>
<?php }
?>



   
