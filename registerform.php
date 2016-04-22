<?php

// acest script reprezinta formularul de inregistrare, respectiv INSERT din cerinta

require 'connect.php';

if(isset($_POST['Adresare']) && isset($_POST['Nume']) && isset($_POST['Prenume']) && isset($_POST['Nickname']) && isset($_POST['CNP']) && isset($_POST['Telefon']) && isset($_POST['Email']) && isset($_POST['DataN']) && isset($_POST['Adresa']) && isset($_POST['Educatie']) && isset($_POST['Parola']) && isset($_POST['Parola_again'])) {
	
	$username = $_POST['Nickname'];
	
	$password = $_POST['Parola'];
	$password_again = $_POST['Parola_again'];
	$password_hash = md5($password);
	
	$firstname = $_POST['Nume'];
	$lastname = $_POST['Prenume'];
	$email = $_POST['Email'];
	$adresa = $_POST['Adresa'];
	$telefon = $_POST['Telefon'];
	$cnp = $_POST['CNP'];
	$data_n = $_POST['DataN'];
	$adresare = $_POST['Adresare'];
	$educatie = $_POST['Educatie'];

	if( !empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($lastname) && !empty($email)&& !empty($adresa) && !empty($telefon) && !empty($cnp) && !empty($data_n) /*&& !empty($eduatie)*/){
		
		if($password != $password_again) {
			echo 'Passwords do not match';
		} else {
			
			$query = "SELECT `Nickname` FROM `client` WHERE `Nickname` = '$username'";
			$query1 = "SELECT `Nickname` FROM `client` WHERE `CNP` = '$cnp'";
			$query2 = "SELECT `Nickname` FROM `client` WHERE `Email` = '$email'";
			
			$query_run = mysql_query($query);
			$query_run1 = mysql_query($query1);
			$query_run2 = mysql_query($query2);
			
			if((mysql_num_rows($query_run) == 1) || (mysql_num_rows($query_run1) == 1) || (mysql_num_rows($query_run2) == 1) ) {
				echo 'Numele de utilizator '.$username.' deja existent';
			} else {
				$query1 = "INSERT INTO `client` VALUES ('','$firstname','$lastname','$cnp','$email','$telefon','$adresa','$data_n','$username','$password','$adresare','$educatie') ";
				if($query_run = mysql_query($query1)) {
					header('Location: Client.php');
				} else {
					echo 'Ne pare rau, inregistrarea nu a putut fi incheiata, incercati mai tarziu!';
				}
			}
			
		}
		
	} else {
		echo 'Este necesara completarea tuturor campurilor!';
	}
	
}

?>

<form id="detailsForm" action="registerform.php" method="POST">
    
		<table>
			<tbody>
				
				<tr>
					<td>  Forma de adresare:  </td>
					<td>
						<select name="Adresare">
							<option value="Domnul"> Dl. </option>              
							<option value="Doamna"> Dna. </option> 
						</select>
					</td>
				</tr>
        
				<tr>
					<td>Nume:  </td>
					<td>
						<span class="input_holder">
							<input type="text" name="Nume">
						<span>
						</span></span></td>
					</tr>
				
				<tr>
					<td>Prenume: </td>
					<td>
						<span class="input_holder">
							<input type="text" name="Prenume">
						<span>
						</span></span>
					</td>
				</tr>
        
				<tr>
					<td>Nickname: </td>
					<td>
						<span class="input_holder">
							<input type="text" name="Nickname">
						</span>
					</td>
				</tr>
				
				<tr>
					<td>Parola: </td>
					<td>
						<span class="input_holder">
							<input type="password" name="Parola">
						</span>
					</td>
				</tr>
				
				<tr>
					<td>Repetare parola: </td>
					<td>
						<span class="input_holder">
							<input type="password" name="Parola_again">
						</span>
					</td>
				</tr>
				
				<tr>
					<td>CNP: </td>
					<td>
						<span class="input_holder">
							<input type="text" name="CNP">
						</span>
					</td>
				</tr>
               
			    <tr>
					<td>Telefon Mobil: </td>
					<td>
						<span class="input_holder">
							<input type="text" name="Telefon">
						</span>
					</td>
				</tr>
        
				<tr>
					<td>Email: </td>
					<td>
						<span class="input_holder">
							<input type="text" name="Email">
						</span>
					</td>
				</tr>
                
				<tr>
					<td>Data nasterii: </td>
					<td>
						<span class="input_holder">
							<input type="text" name="DataN" id="birthday" value="YYYY/DD/MM">
						</span>
					</td>
				</tr>
		
				<tr>
					<td>Adresa: </td>
					<td>
						<span class="input_holder">
							<input type="textarea" name="Adresa" id="adress" style="height:50px; width:150px;">
						</span>
					</td>
				</tr>
                
				<tr>
					<td>Nivel educatie:  </td>
					<td>
						<span class="input_holder">
						<div class="select_field details">
							<div class="select_arrow"></div>
								<span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                    </span>
								<select name="Educatie" id="nivel_educatie">
								<option value="0">Selectati ...</option>
                                            <option value="Liceu">Liceu</option>
                                            <option value="Colegiu/Studii postliceale">Colegiu/Studii postliceale</option>
                                            <option value="Facultate (in curs)">Facultate (in curs)</option>
                                            <option value="Facultate (terminata)">Facultate (terminata)</option>
                                            <option value="Studii postuniversitare">Studii postuniversitare</option>
                                            <option value="Masterat">Masterat</option>
                                            <option value="Doctorat">Doctorat</option>
                                </select>
						</div>
						</span>
					</td>
				</tr>
            
			</tbody></table>
		<br>
		<input type="submit" name="submit" value="Trimite">
		
</form>
