<?php

	$query = "SELECT `IDCurier`,`Firma`,`Telefon` FROM `curier`";
	
	if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista nicio firma de curierat';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$id = $query_row['IDCurier'];
					$firma = $query_row['Firma'];
					$telefon = $query_row['Telefon'];
		
					echo 'Firma de curierat ce are id-ul '.$id.' este '.$firma.' si are numarul de telefon 0'.$telefon.'<br>';
				}
				
			}
	
		} else {
			echo mysql_error();
		}

?>
<br>
<form action="PagAdmin.php" method="POST">
	Firma dorita: <input type="text" name="ids">
	Noul telefon: <input type="text" name="tel_nou">
	<input type="submit" name="submit" value="Modifica">
</form> 

<?php

if( isset($_POST['tel_nou']) && !empty($_POST['tel_nou']) && isset($_POST['ids']) && !empty($_POST['ids'])) {
	
	$tel = $_POST['tel_nou'];
	$id = $_POST['ids'];
	
	$query = "UPDATE `curier` SET `Telefon` = '$tel' WHERE `IDCurier` = '$id'";
	if($query_run = mysql_query($query)) {
		echo 'Modificarea a fost facuta cu succes';
	} else {
		echo 'Nu s-a putut face modificarea, incercati mai tarziu';
	}
	
	} 

?>