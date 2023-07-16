<?php 
include('db.php');
echo $id=$_GET["rid"];$sql=mysqli_query($conn,"DELETE FROM data2 where id=$id ")or die(mysqli_error($conn)); 
 header("location:data.php");

?>