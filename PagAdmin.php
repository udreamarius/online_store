<?php
require 'connect.php';
?>

<!-- aceasta este pagina administratorului unde sunt facute toate cererile -->

<!DOCTYPE html>
<html>
	<head>

		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
		
		<title> 
			Produse
		</title>
		
	</head>
	
	<body>
	
		 <!-- Diviziunea de sus -->
	    <div id="header">
			IT STORE
	    </div>
	
	<!-- Diviziunea doi -->
	    <div id="sign_out">
	    	<li id="list"> 
				<a class="butonn" href="Client.php ">Sign in      </a>
	    		<a class="butonn" href="logout.php">Sign out     </a>
	    		<a class="butonn" href="#">Settings     </a>
	    	</li>	

	    </div>
		
	<!-- Diviziunea stanga -->
	    <div id="left">
	    	<p id="categ">Categorii: </p>
				<a class="buton" href="Laptop.php">Laptop </a>
				<a class="buton" href="Tableta.php">Tableta </a>
	    </div>
		
	<!-- Diviziunea stanga jos -->
		<div id="left_bottom">
	    	
			<div id="Search_form">
				<form action="Produse.php" method="POST">
					<br>Cauta: <br>
					<select name="filter">
						<option value="Laptop">Laptop</option>
						<option value="Tableta">Tableta</option>
					</select> <br>
					<input type="text" name="cauta">
					<input type="submit" name="submit">
				</form>
			</div>
			
		</div>
	
	 <!-- Diviziunea dreapta -->
	    <div id="right">
		
		<div style="margin-top:10px; margin-left:10px;">
		
		Produsele disponibile in magazin:<br><br>
		<?php require 'toate_produsele.php'; ?> <br><br>
		
		
		<!--  simpla 1 -->
		Afisati datele si vanzarile efectuate de curieri dupa data introdusa: 
		<form action="PagAdmin.php" method="POST">
			Data: <input type="text" name="date" value="an-luna-zi">
			<input type="submit" name="submit">
		</form> <br>
		
		<?php require 'vanzdata.php'; ?> <br>
		<!--  simpla 2 -->
		Afisati produsele ce au fost vandute in mai multe unitati pe aceeasi factura:
		<form action="PagAdmin.php" method="POST">
			Numar minim produse: <input type="text" name="nrprod">
			<input type="submit" name="submit">
		</form> <br>
		
		<?php require 'more_prod.php'; ?> <br>
		<!--  simpla 3 -->
		Afisati firma de curier la care plata a fost facuta cash sau cu cardul:
		<form action="PagAdmin.php" method="POST">
			Alegeti cash/card: <input type="text" name="tipplata">
			<input type="submit" name="submit">
		</form><br>
		
		<?php require 'FirmaCash.php'; ?> <br>
		<!--  simpla 4 -->
		Afisati produsele vandute la o anumita data:
		<form action="PagAdmin.php" method="POST">
			Data: <input type="text" name="dates" value="an-luna-zi">
			<input type="submit" name="submit">
		</form> <br>
		
		<?php require 'vanzari_data.php'; ?> <br>
		<!--  simpla 5 -->
		Sa se arate clientii in funcitie de modul in care s-a facut plata (card/cash):
		<form action="PagAdmin.php" method="POST">
			Data: <input type="text" name="plata_client">
			<input type="submit" name="submit">
		</form> <br>
		
		<?php require 'client_plata.php'; ?> <br>
		<!--  simpla 6 -->
		Sa se afiseze detaliile vanzarilor unde plata a fost facuta cash sau unde plata a fost facuta cu cardul:
		<form action="PagAdmin.php" method="POST">
			Data: <input type="text" name="card_cash">
			<input type="submit" name="submit">
		</form> <br>
		
		<?php require 'cash_card.php'; ?> <br>
		
		<!--  complexa 1 -->
		Afisati datele firmei care a livrat produsele clientului dorit:
		<form action="PagAdmin.php" method="POST">
			Scrieti numele clientului: <input type="text" name="nume_client">
			<input type="submit" name="submit">
		</form><br>
		
		<?php require 'curier_produse_client.php'; ?> <br>
		<!--  complexa 2 -->
		Afisati data fiecarei vanzari pentru clientul dorit:
		<form action="PagAdmin.php" method="POST">
			Scrieti numele clientului: <input type="text" name="nume_client1">
			<input type="submit" name="submit">
		</form><br>
		
		<?php require 'data_client_vanzare.php'; ?> <br>
		<!--  complexa 3 -->
		Afisati ce produse au fost vandute la o anumita data, unde livrarea a fost facuta de un anumit curier:
		<form action="PagAdmin.php" method="POST">
			Scrieti data: <input type="text" name="data1">
			Scrieti firma de curierat: <input type="text" name="nume_curier">
			<input type="submit" name="submit">
		</form><br>
		
		<?php require 'produse_data_curier.php'; ?> <br>
		<!--  complexa 4 -->
		Afisati clientii ce au cumparat produse in data dorita:
		<form action="PagAdmin.php" method="POST">
			Data: <input type="text" name="data_produs" value="an-luna-zi">
			<input type="submit" name="submit">
		</form> <br>
		
		<?php require 'vanzari_data_produs.php'; ?> <br>
		
		<!--  complexa 5 -->
		Firmele care nu au efectuat nici o vanzare in anul cerut:
		<form action="PagAdmin.php" method="POST">
			An: <input type="text" name="year">
			<input type="submit" name="submit" value="cauta">
		</form> <br>
		
		<?php require 'firme_fara_vanzare.php'; ?> <br>
		
		<!-- complexa 6 -->
		Anul in care s-au efectuat cele mai multe/putine vanzari:
		<form action="PagAdmin.php" method="POST">
			<br>Alegeti: <br>
					<select name="filters">
						<option value="more">cele mai multe</option>
						<option value="less">cele mai putine</option>
					</select> <br>
					<input type="submit" name="submit" value="Afisati">
		</form>
		
		<?php  require 'an_multe_vanzari.php'; ?> <br>
		
		Adaugati un produs in magazin:
		<form action="PagAdmin.php" method="POST">
			Tip:<input type="text" name="tip"> <br>
			Producator:<input type="text" name="producator"> <br>
			Memorie:<input type="text" name="memorie"> <br>
			Diagonala:<input type="text" name="diagonala"> <br>
			OS:<input type="text" name="os"> <br>
			Disponibilitate:<input type="text" name="disp"> <br>
			Pret:<input type="text" name="pret"> <br>
			<input type="submit" name="submit" value="Adauga">
		</form><br>
		
		<?php require 'add_prod.php'; ?> <br>
		
		Modificati pretul unui produs:
		<form action="PagAdmin.php" method="POST">
			Selectati produsul: <input type="text" name="ids">
			Setati noul pret: <input type="text" name="pret_nou">
			<input type="submit" name="submit">
		</form><br>
		
		<?php require 'update_pret.php'; ?> <br>
		
		Stergeti un produs dupa id:
		<form action="PagAdmin.php" method="POST">
			Selectati produsul: <input type="text" name="idss">
			<input type="submit" name="submit">
		</form><br>
		
		<?php require 'delete_produs.php'; ?> <br>
		
		Modifica numarul de telefon al unei firme de curierat: <br><br>
		
		<?php require 'update_tel.php'; ?> <br><br>
		
		Sterge o firma de curierat:  <br><br>
		
		<?php require 'delete_curier.php'; ?>

		</div>
		
		</div>
	
	</body>

</html>