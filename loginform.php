<?php

// script folosit pentru formularul de autentificare

if(isset($_POST['Nickname']) && isset($_POST['Parola'])) {
	$username = $_POST['Nickname'];
	$password = $_POST['Parola'];
	
	$password_hash = md5($password);
	
	if(!empty($username) && !empty($password) ) {
		
		$query = "SELECT `IDC` FROM `client` WHERE `Nickname`='$username' AND `Parola`='$password'";
		if($query_run = mysql_query($query)) {
			$query_num_rows = mysql_num_rows($query_run);
			
			if($query_num_rows == 0) {
				echo 'Invalid username/password combination';
			} else if(($query_num_rows == 1) && $username == 'admin') {
						$user_id = mysql_result($query_run,0,'id');
						$_SESSION['user_id'] = $user_id;
						header('Location: PagAdmin.php');
					} else {
						$user_id = mysql_result($query_run,0,'id');
						$_SESSION['user_id'] = $user_id;
						header('Location: Pag principala.php');
					}
		}
		
	} else {
		echo 'You must supply a username and password';
	}
}

?>

<form action="<?php echo $current_file; ?>" method="POST">
	Username: <input type="text" name="Nickname">
	Password: <input type="password" name="Parola">
	<input type="submit" name="submit" value="Log in">
</form>