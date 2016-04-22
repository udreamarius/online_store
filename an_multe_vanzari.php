<?php 

if( isset($_POST['filters']) && !empty($_POST['filters'])) {
	
	$type = $_POST['filters'];

	if($type == 'more') {
		$query = "SELECT YEAR(`data_v`) AS AN,COUNT(`IDDV`) AS NR_VANZARI FROM `detaliiv`GROUP BY YEAR(`data_v`) HAVING COUNT(`IDDV`)=( SELECT MAX(a.nrvanz) FROM (SELECT(COUNT(`IDDV`)) AS nrvanz FROM `detaliiv` GROUP BY YEAR(`data_v`)) AS a) ";
		
		$query_run = mysql_query($query);
				
		$query_row = mysql_fetch_assoc($query_run);
			$an = $query_row['AN'];
					
			echo 'Anul cu cele mai multe vanzari este '.$an.'<br>';
			
	} else if($type == 'less') {
		$query = "SELECT YEAR(`data_v`) AS AN,COUNT(`IDDV`) AS NR_VANZARI FROM `detaliiv`GROUP BY YEAR(`data_v`) HAVING COUNT(`IDDV`)=( SELECT MIN(a.nrvanz) FROM (SELECT(COUNT(`IDDV`)) AS nrvanz FROM `detaliiv` GROUP BY YEAR(`data_v`)) AS a) ";
		
		$query_run = mysql_query($query);
				
		$query_row = mysql_fetch_assoc($query_run);
			$an = $query_row['AN'];
					
			echo 'Anul cu cele mai putine vanzari este '.$an.'<br>';
	} else {
		echo 'Trebuie sa selectati laptop sau tableta!';
	}
}

?>