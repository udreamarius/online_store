<?php

if( isset($_POST['year']) && !empty($_POST['year'])) {
	
	$an = $_POST['year'];
	
	$query = "SELECT C.`Firma` FROM `curier` AS C WHERE C.`IDCurier` NOT IN( SELECT DISTINCT V.`IDCurier` FROM `vanzare`AS V INNER JOIN `detaliiv` ON `detaliiv`.`IDV`=V.`IDV` WHERE `detaliiv`.`IDDV` IN (SELECT `IDDV` FROM `detaliiv` WHERE YEAR(`data_v`) = '$an'))";
	
	if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio firma dupa criteriul cautat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$firma = $query_row['Firma'];
					
					echo 'O firma care nu a efectuat nici o vzanare in anul '.$an.' este '.$firma.'<br>'; 
				}
			}
	
		} else {
			echo mysql_error();
		}
	} 


?>