<?php
     
	 // script folosit pentru delogarea de pe site
	 
     require 'core.php';  //pentru a incepe sesiunea inainte de a o sterge
    
	session_destroy();
     header('Location: index.php');

?>