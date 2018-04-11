<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div class="well">
	<div class="content">
		<form action="form_upload.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<table width="350" border="0" align="center">
					<legend>Data Entry
						<tr><td><label>Image Name <span class="required">*</span></label></td>
							<td align="center"><input type="text" name="iname" placeholder="Image Name"></br></td>
						</tr>
						<tr><td><label for="file">Upload Picture:</label></td>
							<td align="right"><input type="file" name="file" id="file"></br></td>
						</tr>
						<tr><td>&nbsp; </td></tr>
						<tr><td><label for="table">Choose Table:</label></td>
							<td align="right"><input type="radio" name="table" value="carousel" id="table" checked>Carousel</br><input type="radio" name="table" value="product" id="table">Products</br><input type="radio" name="table" value="newArrivals" id="table">New Arrivals</br></td>
						</tr>
						<tr><td colspan="2" align="center">
								<button type="submit" name="submit">Submit</button></br></br> 
								<a href="adminhome.php?">View Data</a>
							</td>
						</tr>
				<tr><td colspan="2">&nbsp; </td></tr>
				<tr><td colspan="2" align="center">
					<?php
					if(isset($_REQUEST['submit']) && ($_POST['table'] == 'carousel'))
					{
						$con=mysqli_connect("localhost","root","","amalan0000");
						
						if(mysqli_connect_errno())
						{
							echo "Failed to connect to MySql: " . mysqli_error();
						}
						
						$iname=$_POST['iname'];
						$file=$_FILES["file"]["name"];
						$size=$_FILES["file"]["size"];
						
						if( empty($iname) || empty($file))
						{
							echo "<label class='err'>All fields required</label>";
						}
						
						//check file size
						elseif($size > 500000)
						{
							echo "<label class='err'> Image size max is 500kb </label>";
						}
						
						//store allowed filetype
						$allowedExts = array("gif", "jpeg", "jpg", "png");
						
						//explode  'file name' and 'extension'
						$temp = explode(".", $_FILES["file"]["name"]);
						
						//use end() to get extension
						$extension = end($temp);
						
						// checking the file types
						if ((($_FILES["file"]["type"] == "image/gif")
							|| ($_FILES["file"]["type"] == "image/jpeg")
							|| ($_FILES["file"]["type"] == "image/jpg")
							|| ($_FILES["file"]["type"] == "image/pjpeg")
							|| ($_FILES["file"]["type"] == "image/x-png")
							|| ($_FILES["file"]["type"] == "image/txt")
							|| ($_FILES["file"]["type"] == "image/png"))
							&& ($_FILES["file"]["size"] <= 500000)
							&& in_array($extension, $allowedExts))
						{
							if ($_FILES["file"]["error"] > 0)
							{
								echo "Return Code: " . $_FILES["file"]["error"] . "</br>";
							}
							
							//Checks for the file
							elseif (file_exists("upload/" . $_FILES["file"]["name"]))
							{
								echo $_FILES["file"]["name"] . " Image upload already exists. ";
							}
							else 
							{
								move_uploaded_file( $_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
								
								mysqli_query($con, "INSERT INTO carousel (imageName, filename) VALUES ('$iname', '$file')");
								
								echo "Data Entered Successfully Saved!";
							}
						}
							mysqli_close($con); //close the db connection
					}
					elseif(isset($_REQUEST['submit']) && ($_POST['table'] == 'product'))
					{
						$con=mysqli_connect("localhost","isast","buxtonspanhunterPuckett8791","amalan0000");
						
						if(mysqli_connect_errno())
						{
							echo "Failed to connect to MySql: " . mysqli_error();
						}
						
						$iname=$_POST['iname'];
						$file=$_FILES["file"]["name"];
						$size=$_FILES["file"]["size"];
						
						if( empty($iname) || empty($file))
						{
							echo "<label class='err'>All fields required</label>";
						}
						
						//check file size
						elseif($size > 500000)
						{
							echo "<label class='err'> Image size max is 500kb </label>";
						}
						
						//store allowed filetype
						$allowedExts = array("gif", "jpeg", "jpg", "png");
						
						//explode  'file name' and 'extension'
						$temp = explode(".", $_FILES["file"]["name"]);
						
						//use end() to get extension
						$extension = end($temp);
						
						// checking the file types
						if ((($_FILES["file"]["type"] == "image/gif")
							|| ($_FILES["file"]["type"] == "image/jpeg")
							|| ($_FILES["file"]["type"] == "image/jpg")
							|| ($_FILES["file"]["type"] == "image/pjpeg")
							|| ($_FILES["file"]["type"] == "image/x-png")
							|| ($_FILES["file"]["type"] == "image/txt")
							|| ($_FILES["file"]["type"] == "image/png"))
							&& ($_FILES["file"]["size"] <= 500000)
							&& in_array($extension, $allowedExts))
						{
							if ($_FILES["file"]["error"] > 0)
							{
								echo "Return Code: " . $_FILES["file"]["error"] . "</br>";
							}
							
							//Checks for the file
							elseif (file_exists("upload/" . $_FILES["file"]["name"]))
							{
								echo $_FILES["file"]["name"] . " Image upload already exists. ";
							}
							else 
							{
								move_uploaded_file( $_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
								
								mysqli_query($con, "INSERT INTO product (productName, imageFile) VALUES ('$iname', '$file')");
								
								echo "Data Entered Successfully Saved!";
							}
						}
							mysqli_close($con); //close the db connection
					}
					elseif(isset($_REQUEST['submit']) && ($_POST['table'] == 'newArrivals'))
					{
						$con=mysqli_connect("localhost","isast","buxtonspanhunterPuckett8791","amalan0000");
						
						if(mysqli_connect_errno())
						{
							echo "Failed to connect to MySql: " . mysqli_error();
						}
						
						$iname=$_POST['iname'];
						$file=$_FILES["file"]["name"];
						$size=$_FILES["file"]["size"];
						
						if( empty($iname) || empty($file))
						{
							echo "<label class='err'>All fields required</label>";
						}
						
						//check file size
						elseif($size > 500000)
						{
							echo "<label class='err'> Image size max is 500kb </label>";
						}
						
						//store allowed filetype
						$allowedExts = array("gif", "jpeg", "jpg", "png");
						
						//explode  'file name' and 'extension'
						$temp = explode(".", $_FILES["file"]["name"]);
						
						//use end() to get extension
						$extension = end($temp);
						
						// checking the file types
						if ((($_FILES["file"]["type"] == "image/gif")
							|| ($_FILES["file"]["type"] == "image/jpeg")
							|| ($_FILES["file"]["type"] == "image/jpg")
							|| ($_FILES["file"]["type"] == "image/pjpeg")
							|| ($_FILES["file"]["type"] == "image/x-png")
							|| ($_FILES["file"]["type"] == "image/txt")
							|| ($_FILES["file"]["type"] == "image/png"))
							&& ($_FILES["file"]["size"] <= 500000)
							&& in_array($extension, $allowedExts))
						{
							if ($_FILES["file"]["error"] > 0)
							{
								echo "Return Code: " . $_FILES["file"]["error"] . "</br>";
							}
							
							//Checks for the file
							elseif (file_exists("upload/" . $_FILES["file"]["name"]))
							{
								echo $_FILES["file"]["name"] . " Image upload already exists. ";
							}
							else 
							{
								move_uploaded_file( $_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
								
								mysqli_query($con, "INSERT INTO newArrivals (name, filename) VALUES ('$iname', '$file')");
								
								echo "Data Entered Successfully Saved!";
							}
						}
							mysqli_close($con); //close the db connection
					}
					?>
				</td></tr>
					</legend>
				</table>
			</fieldset>
		</form>
	</div>
	
</div>
</body>
</html>