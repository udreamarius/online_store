<?php

// acest script este folosit pentru a selecta detaliile vanzarii la care plata a fost facuta cash/cu cardul

if( isset($_POST['card_cash']) && !empty($_POST['card_cash'])) {
	
	$plata = $_POST['card_cash'];
	
	
		$query = "SELECT `detaliiv`.`NrBuc`,`detaliiv`.`data_v` FROM `detaliiv` INNER JOIN `vanzare` ON `vanzare`.`IDV` = `detaliiv`.`IDV` WHERE `vanzare`.`Plata` = '$plata' ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare in care plata a fost facuta '.$plata;
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$nr = $query_row['NrBuc'];
					$data = $query_row['data_v'];
					
					if( $plata == 'card') {
						echo 'O vanzare la care plata a fost efectuata cu '.$plata.'-ul a avut loc in data de '.$data.' si au fost achizitonate un numar de '.$nr.' produse<br>';
					} else {
						echo 'O vanzare la care plata a fost efectuata cu '.$plata.' a avut loc in data de '.$data.' si au fost achizitonate un numar de '.$nr.' produse<br>';
					}
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

