<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	$userLogin = "Melviloup";
	$userPwd = 'Melviloup';

	$sql = "SELECT * FROM tblutilisateur
			WHERE userLogin = :userLogin";

	$statement = $db->prepare($sql);
	$statement->bindParam(":userLogin", $userLogin);
	$statement->execute();

	if ($row = $statement->fetch())
	{
		if (password_verify($userPwd, $row["userPwd"]))
		{
			echo "Utilisateur numéro: ".$row["userId"];
			echo "<br>Bravo!";
		}
		else
		{
			echo "<br>Pas enregistré!"; // Debug uniquement! car risque de checker
		}
	} 
?>