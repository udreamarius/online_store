<?php

// acest script este folosit pentru a selecta toate laptopurile din magazin
	
	$product_type = $_POST['laptops'];

		$query = "SELECT * FROM `produs` WHERE `Tip` = '$product_type'ORDER BY `IDP` ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista niciun produs dupa criteriul cautat';
			} else {
				
				while($query_row = mysql_fetch_assoc($query_run)) {
					$producator = $query_row['Producator'];
					$memorie = $query_row['Memorie'];
					$diagonala = $query_row['Diagonala'];
					$disp = $query_row['Disp'];
				}	
					
					echo "$product_type".' '.$producator.' , memorie '.$memorie.' ,diagonala '.$diagonala.' '.$disp.'<br><br>';
			}
		}
	
	

?>