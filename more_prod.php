<?php

// acest script este folosit pentru a selecta produsele care au fost vandute intr-un numar mai mare de unitati decat numarul specificat

if( isset($_POST['nrprod']) && !empty($_POST['nrprod'])) {
	
	$nrprod = $_POST['nrprod'];
	
	
		$query = "SELECT `Tip`,`Producator` FROM `detaliiv` INNER JOIN `produs` ON `produs`.`IDP`=`detaliiv`.`IDP` WHERE `detaliiv`.`NrBuc` = '$nrprod' ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$tip = $query_row['Tip'];
					$producator = $query_row['Producator'];
					
					echo 'Pe o factura s-a vandut '.$tip.' '.$producator.' in mai mult de '.$nrprod.' exemplare'.'<br><br>';
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

