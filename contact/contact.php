<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title> contact </title>
</head>
<body>
	<h1> un formulaire de contact </h1>
	<form method="post" action= "mailto:florian.lefebvre03@etud.univ-paris8.fr">
		<div class = "prenom">
			<label for = "prenom"> Prenom : </label>
			<input type = "text" id = "prenom">
		</div>
		<div class = "nom">
			<label for = "nom">  nom : </label>
			<input type = "text" id = "nom">
		</div>
		<div class="message">
			<label for = "message"> Votre message : </label>
			<textarea id = "message"></textarea>
		</div>
		<input type="submit" value="Envoyer"/>
	</form>

	<?php
	 echo "envoi";
    ?>
</body>
</html>