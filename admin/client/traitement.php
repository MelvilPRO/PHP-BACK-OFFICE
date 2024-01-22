<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	$sql = "INSERT INTO tblclient (clientNom, clientPrenom)
			VALUES (:nom, :prenom)";

	$statement = $db->prepare($sql);
	$statement->execute([":nom"=>$_POST["clientNom"],
						 ":prenom"=>$_POST["clientPrenom"]]);
	// Ou
	//$statement->bindParam(":nom", $_POST["clientNom"]);
	//$statement->bindParam(":prenom", $_POST["clientPrenom"]);
	//$statement->execute();
?>