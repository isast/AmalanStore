<?php
$con=mysqli_connect("localhost","root","","amalan0000");

$id=$_GET['id'];

$query=mysqli_query($con,"SELECT * FROM newArrivals WHERE id='$id'");
$imageFile=mysqli_fetch_assoc($query);

//delete from dir
unlink("upload/".$imageFile['filename']);

//delete from db
mysqli_query($con,"DELETE FROM newArrivals WHERE id='$id'");
mysqli_close($con);

header("location: adminhome.php");
?>