<?php

// acest script selecteaza produsele care au fost cumparate la data introdusa

if( isset($_POST['dates']) && !empty($_POST['dates'])) {
	
	$data = $_POST['dates'];
	
	
		$query = " SELECT `produs`.`IDP`,`Tip`,`Producator` FROM `produs` INNER JOIN `detaliiv` ON `detaliiv`.`IDP`=`produs`.`IDP` WHERE `detaliiv`.`data_v` ='$data' ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare la data introdusa';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$tip = $query_row['Tip'];
					$producator = $query_row['Producator'];
					
					echo 'La data '.$data.' s-a vandut '.$tip.' '.$producator.'<br>';
				}
				
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

