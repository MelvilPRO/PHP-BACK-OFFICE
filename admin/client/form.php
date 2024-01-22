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
		<!-- 
	clientId	
clientDate	
clientAdresse	
clientAdresse2	
clientCP	
clientVille	
clientPays	
clientMail	
clientTel	
-->
		<!-- Formulaire de création ou modification d'un compte -->
		<form>
			<div class="form-group">
				<label for="nom">Entrez votre nom</label>
				<input class="form-control" id="nom" placeholder="Doe">
			</div>

			<div class="form-group">
				<label for="prenom">Entrez votre prenom</label>
				<input class="form-control" id="prenom" placeholder="John">
			</div>

			<div class="form-group">
				<label for="naissance">Entrez votre date de naissance</label>
				<input type="date" class="form-control" id="naissance" placeholder="naissance">
			</div>
			
			<div class="form-group">
				<label for="date">Entrez votre adresse mail</label>
				<input type="email" class="form-control" id="date" aria-describedby="email-help"
					placeholder="john.doe@gmail.com">
				<small id="email-help" class="form-text text-muted">We'll never share your email with anyone
					else.</small>
			</div>

			<div class="form-group">
				<label for="tel">Entrez votre numero de telephone</label>
				<input class="form-control" id="tel" placeholder="0102030405">
			</div>

			<th scope="col">Supprimer</th>
			<th scope="col">Modifier</th> -->




			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</main>
	<footer></footer>
</body>

</html>