<html>
<link rel="stylesheet" href="addroute.css">
    <body>
<div id="addroutepanel">
    <input type="button" id="cancelbtn" value="x" ><br>

    
    <p >Add Routes</p>
    <form action="" method="POST">
    <label >Bus type</label><br>
    <input type="text" name="bus" required><br>
    <label for="">From</label><br>
    <input type="text" name="source"required><br>
    <label for="">TO</label><br>
    <input type="text" name="destination"required><br>
    <label for="">Departure Time</label><br>
    <input type="number" min="1" max="12" name="departuretime"required><br>
   <input type="radio" name="time" value="AM" required>AM
   <input type="radio" name="time" value="PM" required>PM <br>
    <label for="">Fare</label><br>
    <input type="number" name="price" min="0" required><br>
    <label for="">Date</label><br>
    <input type="date" name="date"  min="<?php echo date('Y-m-d');?>" required><br>
    <label for="">BusNumber</label><br>
    <input type="text" name="busnumber"required><br>
    <label for="">No of row of seat</label><br>
    <input type="number" name="row"  step="2" min="2"required><br>
    <label for="">No of column of seat</label><br>
    <input type="number" name="column" step="2" min="2" required><br>
    <input type="submit" value="Add">
   
    </form>
    

</div>
<?php
if(isset($_POST["bus"]))
{
    $bus=$_POST["bus"];
    $source=$_POST["source"];
    $destination=$_POST["destination"];
    $departuretime=$_POST["departuretime"];
   
    $price=$_POST["price"];
    $date=$_POST["date"];
    $busnumber=$_POST["busnumber"];
    $rows=$_POST["row"];
    $columns=$_POST["column"];
$selectedtime=$_POST["time"];
$available=$rows*$columns;
    

    
    $conn=mysqli_connect('localhost','root','','routes');
    
    $sql="INSERT INTO busroutes (bustype,source,destination,departure,fare,datee,busnumber,row,columns,dtime,available)VALUES(
        '$bus','$source','$destination','$departuretime','$price','$date','$busnumber','$rows','$columns','$selectedtime','$available')";

if($conn->query($sql)===true)
{
 echo"<script>window.location.href='routes.php';</script>";
}
else
{
   
}
   
    
}
?>
</body>
<script src="addroute.js">

   </script>
</html>