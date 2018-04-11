<?php
session_start();
$role = $_SESSION['sess_userrole'];

if(!isset($_SESSION['sess_username']) && $role!="admin")
{
 header('Location: login.php?err=2');
}
include('headerSearch.php');
?>

<!DOCTYPE html> 
<!-- HTML entities for Page Display -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    
    <<div id="container">
	<div class="con2">
		<?php 
			$con=mysqli_connect("localhost","root","","amalan0000"); 

			$query2=mysqli_query($con, "SELECT * FROM carousel ORDER BY id ASC");

			$query=mysqli_query($con, "SELECT * FROM product ORDER BY id ASC");

			$query3=mysqli_query($con, "SELECT * FROM newArrivals ORDER BY id ASC");
			
			$get_carousel=mysqli_fetch_assoc($query2);
			
			$get_product=mysqli_fetch_assoc($query);
			
			$get_newArrivals=mysqli_fetch_assoc($query3);
		?>
		<table align="center" cellspacing="0" width="300" border="0">
		<center>
			<h2><a href="form_upload.php">Data Entry</a></h2>
		</center>
			<center><h1><strong><u> Carousel</u></strong></h1></center>
			<?php do {?>
			<tr bordercolor="#FFFFFF" >
				<td colspan="2" align="center">
					<?php echo '<img src="upload/'.$get_carousel['filename'].'" width="200" height="175">'; ?>
				</td>
				<td><a href="edit_carousel.php?id=<?php echo $get_carousel['id']; ?>" style="text-decoration: none"> Edit </a>
				</br></br><a href="delete_carousel.php?id=<?php echo $get_carousel['id']; ?>" style="text-decoration: none"> Delete </a></td>
			</tr>
			<tr><td colspan="2" align="center"><h2><font face="Jokerman"><?php echo strtoupper($get_carousel['imageName']); ?> </font></h2></td>
				
			</tr>
			<?php } while ($get_carousel=mysqli_fetch_assoc($query2));
			mysqli_close($con);
			?>
			
		</table>
		
		<table align="center" cellspacing="0" width="300" border="0">
		<center><h1><strong><u>Products</u></strong></h1></center>
			<?php do {?>
			<tr bordercolor="#FFFFFF" >
				<td colspan="2" align="center">
					<?php echo '<img src="upload/'.$get_product['imageFile'].'" width="200" height="175">'; ?>
				</td>
				<td><a href="edit_data.php?id=<?php echo $get_product['id']; ?>" style="text-decoration: none"> Edit </a>
				</br></br><a href="delete_data.php?id=<?php echo $get_product['id']; ?>" style="text-decoration: none"> Delete </a></td>
			</tr>
			<tr><td colspan="2" align="center"><h2><font face="Jokerman"><?php echo strtoupper($get_product['productName']); ?> </font></h2></td>
				
			</tr>
			<?php } while ($get_product=mysqli_fetch_assoc($query));
			mysqli_close($con);
			?>
			
		</table>
		
		<table align="center" cellspacing="0" width="300" border="0">
		<center><h1><strong><u>New Arrivals</u></strong></h1></center>
			<?php do {?>
			<tr bordercolor="#FFFFFF" >
				<td colspan="2" align="center">
					<?php echo '<img src="upload/'.$get_newArrivals['filename'].'" width="200" height="175">'; ?>
				</td>
				<td><a href="edit_newArrivals.php?id=<?php echo $get_newArrivals['id']; ?>" style="text-decoration: none"> Edit </a>
				</br></br><a href="delete_newArrivals.php?id=<?php echo $get_newArrivals['id']; ?>" style="text-decoration: none"> Delete </a></td>
			</tr>
			<tr><td colspan="2" align="center"><h2><font face="Jokerman"><?php echo strtoupper($get_newArrivals['name']); ?> </font></h2></td>
				
			</tr>
			<?php } while ($get_newArrivals=mysqli_fetch_assoc($query3));
			mysqli_close($con);
			?>
			
		</table>
		
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>  
</html>



