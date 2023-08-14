<?php
if(isset($_POST["submit"]))
{
    $bus=$_POST["bustype"];
    $source=$_POST["source"];
    $destination=$_POST["destination"];
    $departuretime=$_POST["departuretime"];
    $available=$_POST["availableseat"];
    $price=$_POST["price"];
    $date=$_POST["date"];
    $busnumber=$_POST["busnumber"];
    $id=$_POST["hide"];
   

    try{
    $conn=mysqli_connect('localhost','root','','routes');
    
    $sql="UPDATE busroutes set bustype='$bus',source= '$source',destination='$destination'
    ,departure='$departuretime',available='$available',fare='$price',datee='$date',busnumber='$busnumber' where id='$id'";

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
else

?>