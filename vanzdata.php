<?php

// acest script este folosit pentru a selecta vanzarile efectuate de curieri la data selectata

if( isset($_POST['date']) && !empty($_POST['date'])) {
	
	$data = $_POST['date'];
	
	
		$query = "SELECT `IDDV`,`data_v` FROM `detaliiv` INNER JOIN `vanzare` ON `vanzare`.`IDV`=`detaliiv`.`IDV` WHERE `detaliiv`.`data_v` > '$data' ";
		
		if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio vanzare dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$id_vanzare = $query_row['IDDV'];
					$data_vanzare = $query_row['data_v'];
					
					echo 'Vanzarea cu id-ul '.$id_vanzare.' a avut loc in data de '.$data_vanzare.'<br><br>';
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>

