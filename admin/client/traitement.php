<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	$clientNom = "";
	$clientPrenom = "";

	if (isset($_POST["clientNom"]))
	{
		$clientNom = $_POST["clientNom"];
	}
		
	if (isset($_POST["clientPrenom"]))
	{
		$clientPrenom = $_POST["clientPrenom"];
	}
	
	$sql = "INSERT INTO tblclient (clientNom, clientPrenom)
			VALUES (:nom, :prenom)";

	$statement = $db->prepare($sql);
	$statement->execute([":nom"=>$clientNom,
						 ":prenom"=>$clientPrenom]);
	// Ou
	//$statement->bindParam(":nom", $_POST["clientNom"]);
	//$statement->bindParam(":prenom", $_POST["clientPrenom"]);
	//$statement->execute();
?>