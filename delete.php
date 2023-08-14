<?php
if(isset($_POST["dbtn"]))
{
    $id=$_POST["hide"];
   


    try{
    $conn=mysqli_connect('localhost','root','','routes');
    
    $sql="DELETE FROM busroutes where id='$id'";

echo $sql;
if($conn->query($sql)===true)
{
  echo"<script>window.location.href='routes.php';</script>";
}
else
{
   
}
$conn->close();
    }
    finally
    {

    }
}

?>