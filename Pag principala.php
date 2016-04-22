<?php
require 'connect.php';
?>

<?php require 'utile.php' ?>

<!-- aceatsa este pagina principala a magazinului -->

<!DOCTYPE html>
<html>
	<head>

		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
		
		<title> 
			Pagina principala
		</title>
		
	</head>
	
	<body>
	
	 <!-- Diviziunea de sus -->
	    <div id="header">
			IT STORE

	    </div>
	
	<!-- Diviziunea doi -->
	    <div id="sign_out">
	    	<li id="list"> 
				<a class="butonn" href="Client.php ">Sign in      </a>
	    		<a class="butonn" href="logout.php">Sign out     </a>
	    		<a class="butonn" href="#">Settings     </a>
	    	</li>	

	    </div>
		
	<!-- Diviziunea stanga -->
	    <div id="left">
	    	<p id="categ">Categorii: </p>
				<a class="buton" href="Laptop.php">Laptop </a>
				<a class="buton" href="Tableta.php">Tableta </a>
	    </div>
		
	<!-- Diviziunea stanga jos -->
		<div id="left_bottom">
	    	
			<div id="Search_form">
				<form action="Produse.php" method="POST">
					<br>Cauta: <br>
					<select name="filter">
						<option value="Laptop">Laptop</option>
						<option value="Tableta">Tableta</option>
					</select> <br>
					<input type="text" name="cauta">
					<input type="submit" name="submit">
				</form>
			</div>
			
		</div>
		
	<!-- Diviziunea dreapta -->
	    <div id="right">
		
			<div style="margin-top:10px; margin-left:10px;">
		
				<img src="images/1.png" width="960" height="200"> <br>
		
				<img src="images/2.png" width="960" height="200"> <br>
				
				<img src="images/3.png" width="960" height="200"> <br>

			</div>
		
		</div>
	
	</body>

</html>