<html>
    <head>
        <link rel="stylesheet" href="mainbody.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php 
        include 'userdatabaseconnect.php';
        include 'busroutedatabaseconnect.php';
        include 'ticketdatabaseconnect.php';
       
       ?>
      <div id="dashbody">
        <a href="user.php">
        <div id="userbox">
        <center>
      <i class="fa fa-user" style="font-size:70px"></i><br>
      <p>USER:</p>
      <p><?php echo $usercount;?></p>
</center>
</div>
</a>
<a href="routes.php">
<div  class="myclass">
        <center>
        <i class="fa fa-bus" style="font-size:65px;"></i><br>
      <p>ROUTES</p>
      <p><?php echo $noofbus;?></p>
</center>
</div>
</a>

<a href="confirmticket.php">
<div class="myclass">
        <center>
        <i class="fa fa-ticket" style="font-size:70px;color:red;"></i><br>
      <p>confirmticket</p>
      <p><?php echo $noofticket;?></p>
</center>
</div>
</a>

<a href="admin.php">
        <div  class="myclass">
        <center>
        <i class="fa fa-user-circle-o" style="font-size:70px"></i><br>
      <p>Admin:</p>
      <p><?php echo $_SESSION["adminnumber"];?></p>
</center>
</div>
</a>
<a href="revenue.php">
        <div  class="myclass">
        <center>
        <i class="fa fa-dollar" style="font-size:70px"></i><br>
      <p>revenue:</p>
      <p><?php echo $revenue?></p>
</center>
</div>
</a>


      </div>  


    </body>
</html>