<!-- 
	Si l'id est n'est pas null, alors on modifie des informations
	Sinon l'on rajouter un nouveau client dans la base de données

	Ensuite on fait une requête préparée pour éviter les injections SQL
	On execute la requête et reviens sur la liste des comptes
 -->
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
	header("location:index.php");
?>