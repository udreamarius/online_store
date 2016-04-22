<?php

// acest script este folosit pentru a selecta data vanzarii si numarul de produse vandute unui anumit client specificat

if( isset($_POST['nume_client1']) && !empty($_POST['nume_client1'])) {
	
	$nume_client = $_POST['nume_client1'];
	
	
		$query = "SELECT `data_v`,`NrBuc` FROM `detaliiv` INNER JOIN `vanzare` ON `vanzare`.`IDV` = `detaliiv`.`IDV` WHERE `vanzare`.`IDC` IN (SELECT DISTINCT `client`.`IDC` FROM `client` INNER JOIN `vanzare` ON `vanzare`.`IDC` = `client`.`IDC` WHERE `client`.`Nume` = '$nume_client') ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$data = $query_row['data_v'];
					$nr_bucati = $query_row['NrBuc'];

					echo 'Data la care clientul '.$nume_client.' a primit cele '.$nr_bucati.' produse este '.$data.'<br>';
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

