<?php

// acest script este folosit pentru a selecta produsele vandute la data introdusa de catre curierul introdus

if( isset($_POST['data1']) && !empty($_POST['data1'] && isset($_POST['nume_curier']) && !empty($_POST['nume_curier']))) {
	
	$nume_curier = $_POST['nume_curier'];
	$data = $_POST['data1'];
	
	
		$query = "SELECT `Tip`,`Producator`,`Pret` FROM `produs` INNER JOIN `detaliiv` ON `detaliiv`.`IDP` = `produs`.`IDP` WHERE `detaliiv`.`IDV` IN (SELECT DISTINCT `vanzare`.`IDV` FROM `vanzare` INNER JOIN `curier` ON `curier`.`IDCurier` = `vanzare`.`IDCurier` WHERE `curier`.`Firma` = '$nume_curier') AND `detaliiv`.`data_v` = '$data' ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$tip = $query_row['Tip'];
					$producator = $query_row['Producator'];
					$pret = $query_row['Pret'];

					echo 'Data la care curierul '.$nume_curier.' a livrat '.$tip.' '.$producator.' in valoare de '.$pret.' lei este '.$data.' <br>';
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

