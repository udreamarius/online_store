<?php

// acest script este folosit pentru a selecta produse de tip laptop/tableta in functie de butonul apasat

if( isset($_POST['filter']) && !empty($_POST['filter']) && isset($_POST['cauta']) && !empty($_POST['cauta'])) {
	
	$product_type = $_POST['filter'];
	$search = $_POST['cauta'];

	
	if($product_type == 'Laptop' || $product_type == 'Tableta') {
		$query = "SELECT * FROM `produs` WHERE `Tip` = '$product_type' AND `Producator` = '$search' ORDER BY `IDP` ";
		
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
					
					
					echo "$product_type".' '.$producator.' , memorie '.$memorie.' ,diagonala '.$diagonala.' '.$disp.'   Pret: '.$price.'<br><br>';
	}
			}
	
		} else {
			echo mysql_error();
		}
	} else {
		echo 'Trebuie sa selectati laptop sau tableta!';
	}
}

?>