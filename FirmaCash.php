<?php

// acest script este folosit pentru a selecta firmele de curier la care plata a fost facuta cash/cu cardul

if( isset($_POST['tipplata']) && !empty($_POST['tipplata'])) {
	
	$plata = $_POST['tipplata'];
	
	$query = "SELECT `Firma` FROM `vanzare` INNER JOIN `curier` ON `curier`.`IDCurier`=`vanzare`.`IDCurier` WHERE `vanzare`.`Plata` = '$plata' ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$firma = $query_row['Firma'];
					
					echo 'La firma '.$firma.' plata a fost '.$plata.'<br>';
				}
			}
	
		} else {
			echo mysql_error();
		} 

}
?>
