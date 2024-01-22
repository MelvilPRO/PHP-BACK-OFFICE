<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	if (isset($_POST["clientId"]) && $_POST["clientId"] > 0)
	{
		$sql = "UPDATE tblclient 
				SET clientNom=:nom, clientPrenom=:prenom
				WHERE clientId=:id";
	}
	else
	{
		$sql = "INSERT INTO tblclient (clientNom, clientPrenom)
				VALUES (:nom, :prenom)";
	}

	if (isset($_POST["clientId"]) && $_POST["clientId"] > 0)
	{
		$statement->bindParam(":id", $_POST["clientId"]);
	}

	$statement = $db->prepare($sql);
	if (isset($_POST["clientNom"]))
	{
		$statement->bindParam(":nom", $_POST["clientNom"]);
	}
	if (isset($_POST["clientPrenom"]))
	{
		$statement->bindParam(":prenom", $_POST["clientPrenom"]);
	}
	
	$statement->execute();
?>