<?php
require 'connect.php';
?>

<!-- aceasta pagina este speciala pentru a afisa tabletele din magazin -->

<!DOCTYPE html>
<html>
	<head>

		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
		
		<title> 
			Tablete
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
		
		<?php
			
		// acest script este folosit pentru a selecta toate tabletele din magazin	
		
		$product_type = 'Tableta';
		
		$query = "SELECT * FROM `produs` WHERE `Tip` = '$product_type' ORDER BY `IDP` ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista niciun produs dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$producator = $query_row['Producator'];
					$memorie = $query_row['Memorie'];
					$diagonala = $query_row['Diagonala'];
					$disp = $query_row['Disp'];
					$price = $query_row['Pret'];
					
					
					echo "$product_type".' '.$producator.' , memorie '.$memorie.' ,diagonala '.$diagonala.' ,'.$disp.'   Pret: '.$price.'<br><br>';
				}
			}
	
		} else {
			echo mysql_error();
		}
	

		?>
		</div>
		</div>
	
	</body>

</html>