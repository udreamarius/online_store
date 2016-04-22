<?php

// acest script este folosit pentru a sterge un anumit produs din magazin

if(isset($_POST['idss']) && !empty($_POST['idss'])) {

	$id = $_POST['idss'];
	
	$query = "DELETE FROM `produs` WHERE `IDP` = '$id'";
	$query_run = mysql_query($query);
	
	} 


?>

