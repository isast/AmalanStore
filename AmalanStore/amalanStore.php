<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Amalan Store</title>
<style> .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}.container {
    
    color: red;
	font-size: 16pt;
}	</style>
</head>

<body>
<?php include("headerSearch.php")?>
<?php 
	$con=mysqli_connect("localhost","root","","amalan0000"); 

	$query2=mysqli_query($con, "SELECT * FROM carousel ORDER BY id ASC");
	
	$query=mysqli_query($con, "SELECT * FROM product ORDER BY id ASC");
	
	$query3=mysqli_query($con, "SELECT * FROM newArrivals ORDER BY id ASC");
?>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
	
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  
	  <!-- Indicators -->
	  
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>


		<div class="carousel-inner" role="listbox">
		<?php
		
		$i=0;
		while($get_carousel=mysqli_fetch_assoc($query2)){
			if($i<3){
				if($i == 0){
					echo '<div class="item active">
							<img src="upload/'.$get_carousel['filename'].'" alt="'.$get_carousel['imageName'].'">
							<div class="carousel-caption">
								<h3>'.$get_carousel['imageName'].'</h3>
								<p>'.$get_carousel['description'].'</p>
							</div>
						  </div>';
				}
				else{
					echo '<div class="item">
							<img src="upload/'.$get_carousel['filename'].'" alt="'.$get_carousel['imageName'].'">
								<div class="carousel-caption">
									<h3>'.$get_carousel['imageName'].'</h3>
									<p>'.$get_carousel['description'].'</p>
								</div>
							</div>';
					}
				$i++;	
			}
		}?>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		
	  <div class="panel-body"></br></br>
	  	<div class="row">
	
		<?php
		  $x=0;
		  while($get_product=mysqli_fetch_assoc($query)){
			  if($x<6){
				  echo '<div class="col-sm-4">
				  			<div class="container">
								<img src="upload/'.$get_product['imageFile'].'" style="margin:auto;"/>
								<div class="centered"><p>'.$get_product['productName'].'
									
								</div>
							</div>
						</div>';
				  if($x===2){
					  echo '</div><div class="row">';
				  }

			  }
			  $x++;
		  }
	  echo'</div>
	  		</div>
			
			
			
			<div class="container-fluid"></br></br>
				<div class="row">';
	  	$y=0;
	  	while($get_newArrivals=mysqli_fetch_assoc($query3)){
			if($y<8){
				echo '<div class="col-sm-3">
						<img src="upload/'.$get_newArrivals['filename'].'"/>
					</div>';
				if($y === 3){
					echo '</div><div class="row">';
				}
			}
			$y++;
		}
			echo '</div>
					</div>';
			
			
			mysqli_close($con);
	  ?>
		<footer>
			<div >
				<center>
					<a href="amalanStore.php"><img src="Sword_Icon_Link.png" style="height: 45px;"></a><p>Copyright 1999-2018</p>
				</center>
			</div>
		</footer>

	</div>
<div class="col-sm-3"></div>
	</div>
</body>
</html>