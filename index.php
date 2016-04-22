<?php

// script folosit pentru redirectionarea la pagina dorita dupa autentificare

require 'connect.php';
require 'core.php';

if(loggedin()) {
       header('Location: Pag principala.php');
} else {
       include 'loginform.php';
}

//$p='8287458823facb8ff918dbfabcd22ccb';
?>