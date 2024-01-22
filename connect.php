<?php 
	/*
	 * Définir que la BDD est en local
	 * Donner le nom eval qui est la même que dans PHP My Admin
	 * Spécifie le charset dans sa globalité (pas besoin de spécifier bin)
	 * Nom d"utilisateur PHP My Admin
	 * Mot de passe PHP My Admin
	 */
	$dbhost = "localhost";
	$dbname = "eval";
	$username = "root";
	$userpass = "";
	try
	{
		$db = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8", $username, $userpass);
	}
	catch (Exception $e)
	{
		die("Erreur: ".$e->getMessage());
	}
?>