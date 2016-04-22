<?php

	$query = "SELECT `IDCurier`,`Firma` FROM `curier`";
	
	if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio firma de curierat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$id = $query_row['IDCurier'];
					$firma = $query_row['Firma'];
		
					echo 'Firma de curierat ce are id-ul '.$id.' este '.$firma.'<br>';
				}
				
			}
	
		} else {
			echo mysql_error();
		}
		
?>

<br>
<form action="PagAdmin.php" method="POST">
	Firma dorita: <input type="text" name="idss">
	<input type="submit" name="submit" value="Sterge">
</form> <br>

<?php

// acest script este folosit pentru a sterge un anumit produs din magazin

if(isset($_POST['idss']) && !empty($_POST['idss'])) {

	$id = $_POST['idss'];
	
	$query = "DELETE FROM `curier` WHERE `IDCurier` = '$id'";
	if($query_run = mysql_query($query)) {
		echo 'Firma stearsa cu succes';
	} else {
		echo 'Firma nu a putut fi stearsa, incercati mai tarizu';
	}
	
	} 


?>