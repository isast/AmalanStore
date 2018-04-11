<?php
$con=mysqli_connect("localhost","root","","amalan0000");

$id=$_GET['id'];

$query=mysqli_query($con,"SELECT * FROM product WHERE id='$id'");
$imageFile=mysqli_fetch_assoc($query);

//delete from dir
unlink("upload/".$imageFile['imageFile']);

//delete from db
mysqli_query($con,"DELETE FROM product WHERE id='$id'");
mysqli_close($con);

header("location: adminhome.php");
?>