<?php
$noofbus=0;
 $conn1=mysqli_connect('localhost','root','','routes');
 $sql1="SELECT * from busroutes";
 $result1=$conn1->query($sql1);
 
 if($result1->num_rows>0)
  {
    while($row = $result1->fetch_assoc())
    {

$noofbus++;
    }}

?>