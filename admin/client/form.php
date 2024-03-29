<!-- 
	Page pour créer ou modifier un utilisateur
	Modifie si l'id est présent avec GET
	Sinon créer un utilisateur
 -->
<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	$clientNom = ""; $clientPrenom = "";

	if (isset($_GET["id"]) && $_GET["id"] > 0)
	{
		$sql = "SELECT * FROM tblclient 
				WHERE clientId = :id";

		$statement = $db->prepare($sql);
		$statement->execute([":id"=>$_GET["id"]]);
		if ($row = $statement->fetch())
		{
			$clientNom = $row["clientNom"];
			$clientPrenom = $row["clientPrenom"];
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Back-Office | Liste des clients</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<head></head>
	<main>
		<!-- Formulaire de création ou modification d'un compte -->
		<form action="./traitement.php" method="post">
			<div class="form-group">
				<label for="clientNom">Entrez votre nom</label>
				<input class="form-control" id="clientNom" placeholder="Doe" name="clientNom" value="<?=$clientNom;?>">
			</div>

			<div class="form-group">
				<label for="clientPrenom">Entrez votre prenom</label>
				<input class="form-control" id="clientPrenom" placeholder="John" name="clientPrenom" value="<?=$clientPrenom;?>">
			</div>

			<div class="form-group">
				<label for="clientDate">Entrez votre date de naissance</label>
				<input type="date" class="form-control" id="clientDate" placeholder="clientDate" name="clientDate">
			</div>
			
			<div class="form-group">
				<label for="clientMail">Entrez votre adresse mail</label>
				<input type="email" class="form-control" id="clientMail" name="clientMail" aria-describedby="email-help"
					placeholder="john.doe@gmail.com">
				<small id="email-help" class="form-text text-muted">We'll never share your email with anyone
					else.</small>
			</div>

			<div class="form-group">
				<label for="clientTel">Entrez votre numero de telephone</label>
				<input class="form-control" id="clientTel" placeholder="0102030405">
			</div>

			<th scope="col">Supprimer</th>
			<th scope="col">Modifier</th>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</main>
	<footer></footer>
</body>
</html>