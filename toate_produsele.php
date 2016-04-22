<?php 

// acest script este folosit pentru a selecta toate produsele din magazin

$query = "SELECT `IDP`,`Tip`,`Producator`,`Memorie`,`Diagonala`,`OS`,`Disp`,`Pret` FROM `produs`";

if($query_run = mysql_query($query)) {
		
			if(mysql_num_rows($query_run) == NULL) {
				echo 'Nu exista niciun produs ';
			} else {
				while($query_row = mysql_fetch_assoc($query_run)) {
					$id = $query_row['IDP'];
					$tip = $query_row['Tip'];
					$producator = $query_row['Producator'];
					$memorie = $query_row['Memorie'];
					$diagonala = $query_row['Diagonala'];
					$os = $query_row['OS'];
					$disp = $query_row['Disp'];
					$pret = $query_row['Pret'];
					
					if( $os != NULL) {
						echo 'Produsul ce are id-ul '.$id.' : '.$tip.' , '.$producator.' , '.$memorie.' GB, '.$diagonala.' inch, '.$os.' , '.$disp.' , '.$pret.' lei<br>';
					} else {
						echo 'Produsul ce are id-ul '.$id.' : '.$tip.' , '.$producator.' , '.$memorie.' GB, '.$diagonala.' inch, '.$disp.' , '.$pret.' lei<br>';
					}
				}
				
			}
	
		} else {
			echo mysql_error();
		}

?>