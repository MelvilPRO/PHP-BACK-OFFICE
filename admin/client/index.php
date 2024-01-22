<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	$sql = "SELECT * FROM tblclient
	ORDER BY clientNom, clientPrenom ASC";

	$statement = $db->prepare($sql);
	$statement->execute();
	$recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Back-Office | Liste des clients</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<head></head>
	<main class="container">
		<h1 class="text-primary">Liste des clients</h1>
		<!-- Tableau HTML permettant de consulter les informations des clients -->
		<!-- On peut se rediriger vers la page de suppression, modification ou création de comptes -->
		<table class="table table-striped">
			<caption>Liste des clients</caption>
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Prenom</th>
				<th scope="col">Mail</th>
				<th scope="col">Tel</th>
				<th scope="col">Supprimer</th>
				<th scope="col">Modifier</th>
			</tr>
			<?php foreach ($recordset as $row) { ?>
				<tr>
					<td><?=$row["clientNom"];?></td>
					<td><?=$row["clientPrenom"];?></td>
					<td><?=$row["clientMail"];?></td>
					<td><?=$row["clientTel"];?></td>
					<td>
						<a href="supression.php?id=<?=$row["clientId"];?>"title="Supprimer">Supprimer</a>
					</td>
					<td>
						<a href="form.php?id=<?=$row["clientId"];?>"title="Modifier">Modifier</a>
					</td>
				</tr>
				<?php } ?>
		</table>
	</main>
	<footer></footer>
</body>
</html>