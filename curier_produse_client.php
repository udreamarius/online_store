<?php

// acest script este folosit pentru a selecta date despre firma de curierat care a livrat produsele clientului specificat

if( isset($_POST['nume_client']) && !empty($_POST['nume_client'])) {
	
	$nume_client = $_POST['nume_client'];
	
	
		$query = "SELECT `Firma`,`Telefon`,`Judet` FROM `curier` INNER JOIN `vanzare` ON `vanzare`.`IDCurier` = `curier`.`IDCurier` WHERE `vanzare`.`IDC` IN (SELECT DISTINCT `client`.`IDC` FROM `client` INNER JOIN `vanzare` ON `vanzare`.`IDC` = `client`.`IDC` WHERE `client`.`Nume` = '$nume_client') ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$firma = $query_row['Firma'];
					$telefon = $query_row['Telefon'];
					$judet = $query_row['Judet'];
					
					
					echo 'Firma care a livrat produsele clientului '.$nume_client.' este '.$firma.' ce are telefonul '.$telefon.' si apartine de judetul '.$judet.'<br><br>';
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

