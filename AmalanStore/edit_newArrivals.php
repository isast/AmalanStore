<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$con=mysqli_connect("localhost","root","","amalan0000"); 
	
	$id=$_GET['id'];
	
	$query=mysqli_query($con,"SELECT * FROM newArrivals WHERE id= '$id'");
		

	 for($i=0; $get_data=mysqli_fetch_assoc($query); $i++)
	 { ?>
	  <div id="container"><div class="content">
	  	<form action="update_newArrivals_submit.php?id=<?php echo $get_data['id']; ?>" method="post" enctype="multipart/form-data">
	  		<fielset>
	  			<table width="420" border="0" align="center">
	  				<legend>UPDATE DATA
	  				<tr><td>Current Image Name</td>
	  				<td width="229"><input type="text" name="name" value="<?php echo $get_data['name']; ?>"/></br></td></tr>
	  				
				<tr><td colspan="2"></br></br>Current Image</td></tr>
  			<tr><td colspan="2" align="center"><img src="upload/<?php echo $get_data['filename']; ?>" width="150" height="150" ></td></tr>
  			
		  <tr><td></br>Replace with New Image:</td>
	<td align="right"></br><input type="file" name="file" id="file"></br></td></tr><tr><td>&nbsp;</td></tr>
 			<tr><td colspan="2" align="center"><button name="submit">Submit</button>
 			<?php } mysqli_close($con);?>
</br></br><a href="adminhome.php?">View Data</a></br>
 			<a href="form_upload.php">Add new data</a></td></tr>
  			
	  			
	  		
	  	</form></fielset></table></legend>
	  </div></div>		 
	 
	
</body>
</html>