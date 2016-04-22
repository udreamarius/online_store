<?php

// acest script este folosit pentru a selecta clientii care au cumparat produse la data introdusa

if(isset($_POST['data_produs']) && !empty($_POST['data_produs'])) {

	$data = $_POST['data_produs'];
	
	$query = "SELECT `Nume`,`Prenume` FROM `client` INNER JOIN `vanzare` ON `vanzare`.`IDC` = `client`.`IDC` WHERE `vanzare`.`IDV` IN (SELECT DISTINCT `detaliiv`.`IDV` FROM `detaliiv` INNER JOIN `vanzare` ON `vanzare`.`IDV` = `detaliiv`.`IDV` WHERE `detaliiv`.`data_v` = '$data') ";
	$query_run = mysql_query($query);
	
	if($query_run) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu a fost efectuata nicio vanzare in data de '.$data;
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$nume = $query_row['Nume'];
					$prenume = $query_row['Prenume'];
					
					echo 'Clientul '.$nume.' '.$prenume.' a achizitionat produse in data de '.$data.'<br>';
				
				}
			}
	
		} else {
			echo mysql_error();
		}

}

?>