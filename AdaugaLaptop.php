<?php
require 'connect.php';
?>

<?php require 'utile.php' ?>

<!-- aceasta este pagina de adaugare a unui laptop in oferta magazinului -->

<!DOCTYPE html>
<html>
	<head>

		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
		
		<title> 
			Adauga Laptop
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
	    	<p id="categ">Adauga: </p>
				<a class="buton" href="AdaugaLaptop.php">Laptop </a>
				<a class="buton" href="AdaugaTableta.php">Tableta </a>
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
		
		<form >
		<table>
			<tr>
				<td>Producator:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Memorie: </td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Diagonala:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>OS:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Disponibilitate:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Pret:</td>
				<td><input type="text" name=""></td>
			</tr>
			</table>
			<input type="submit" name="submit" value="Adauga">
		</form>

		</div>
		
		</div>
	
	</body>

</html>