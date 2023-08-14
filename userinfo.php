<html><head>
    <title>userinfo</title>
    <link rel="stylesheet" href="confirmticket.css">
    <link rel="stylesheet" href="user.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
    <?php
include 'navbar.php';
?>
<div id="logo">
    <?php

    $username=$_GET["username"];
    $conn= mysqli_connect("localhost","root","","routes");
   
    $sql="SELECT * FROM signupform where name='$username'";
    $result= $conn->query($sql);
      if($result->num_rows)
      {
        echo"<center>
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
       
     </center>";
       while($row=$result->fetch_assoc())
          {
            echo"  <center>
            <div class='user1index'>
            <form method='post' action='userinfo.php'>
         <div class='userdiv'>
         
         <input type='text' name='username' value='".$row["name"]."' readonly style='width:100%;height:100%;'>
             </div>
             <div class='emaildiv'>
             <input type='text' name='useremail' value='".$row["email"]."' readonly style='width:100%;height:100%;'>
             </div>
             <div class='passworddiv'>
             <input type='text' name='userpassword' value='".$row["password"]."' readonly style='width:100%;height:100%;'>
             </div>
             
             
             </form>
         </div>
         </center>";
          }}


          $conn= mysqli_connect("localhost","root","","routes");
   
          $sql="SELECT * FROM ticket where name='$username'";
          $result= $conn->query($sql);
            if($result->num_rows)
            {
                while($row=$result->fetch_assoc())

          {
            echo"
    
            <div id='ticketbody' class='block'>
            <center>
            <i class='fa fa-user-circle-o' style='font-size:75px;color:white;'></i><br>
            </center>
               <label for >name:</label>
               ".$row["name"]."
               <br>
               <label>Email:</label>
               <input type='text' disabled value=><br>
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
               <input type='hidden' name='ticketid' value='".$row["ticketid"]."'>
               <center>
             
               </center>
            
               
            </div>
            "; 
          }
            }
     
    ?>




</div>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
