<?php

// acest script este folosit pentru a actualiza pretul unui anumit produs

if( isset($_POST['pret_nou']) && !empty($_POST['pret_nou']) && isset($_POST['ids']) && !empty($_POST['ids'])) {
	
	$pret_nou = $_POST['pret_nou'];
	$id = $_POST['ids'];
	
	$query = "UPDATE `produs` SET `Pret` = '$pret_nou' WHERE `IDP` = '$id'";
	$query_run = mysql_query($query);
	
	} 


?>

