<?php
	$dbServer='localhost';
	$dbNombre='plataformaeducativa';
	$dbUser='root';
	$dbPassword=''; 

	try{
		$pdo = new PDO("mysql:host=$dbServer; dbname=$dbNombre", $dbUser, $dbPassword); 
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e){
		echo $e->getMessage();
	}