<?php

// acest script este folosit pentru a selecta clientii care au platit cash/cu cardul pentru produsele achizitionate

if(isset($_POST['plata_client']) && !empty($_POST['plata_client'])) {

	$plata_client = $_POST['plata_client'];
	
	$query = "SELECT `client`.`Nume`,`client`.`Prenume`,`vanzare`.`Plata` FROM `vanzare` INNER JOIN `client` ON `client`.`IDC`=`vanzare`.`IDC` WHERE `vanzare`.`plata` = '$plata_client' ";
	$query_run = mysql_query($query);
	
	if($query_run) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu a fost efectuata nicio vanzare '.$plata_client;
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$nume = $query_row['Nume'];
					$prenume = $query_row['Prenume'];
					//$plata = $query_row['Plata'];
					
					if( $plata_client == 'cash') {
						echo 'Clientul '.$nume.' '.$prenume.' a platit '.$plata_client.' pentru produsele achizitionate <br>';
					} else {
						echo 'Clientul '.$nume.' '.$prenume.' a platit cu '.$plata_client.'-ul pentru produsele achizitionate <br>';
					}
				}
			}
	
		} else {
			echo mysql_error();
		}

}

?>