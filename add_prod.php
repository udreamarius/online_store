<?php

require 'connect.php';

if(isset($_POST['tip']) && isset($_POST['producator']) && isset($_POST['memorie']) && isset($_POST['diagonala']) && isset($_POST['os']) && isset($_POST['disp']) && isset($_POST['pret'])) {
	
	$tip = $_POST['tip'];
	$producator = $_POST['producator'];
	$memorie = $_POST['memorie'];
	$diagonala = $_POST['diagonala'];
	$os = $_POST['os'];
	$disp = $_POST['disp'];
	$pret = $_POST['pret'];
	
	if( !empty($tip) && !empty($producator) && !empty($memorie) && !empty($diagonala) && /*!empty($os) && */!empty($disp)&& !empty($pret)){
		
				$query1 = "INSERT INTO `produs` VALUES ('','$tip','$producator','$memorie','diagonala','$os','$disp','$pret') ";
				if($query_run = mysql_query($query1)) {
					echo 'Produs adaugat cu succes<br>';
				} else {
					echo 'Ne pare rau, adaugarea nu a putut fi incheiata, incercati mai tarziu!<br>';
				}	
				
	} else {
		echo 'Este necesara completarea tuturor campurilor!';
	}
	
}

?>
	
