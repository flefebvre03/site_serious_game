<!DOCTYPE html>
<html lang = "fr">
<head>
	<meta charset = "utf-8">
	<title> sondage </title>
</head>
<body>
	<h1> Sondage </h1>
	<p> Formulaire de sondage : </p>
	<form method="post" action="">
		<label> Quel est le serious game que vous préférez ?</label><br/>
		<label for ="code_combat">
		<input id = "code_combat" type = "radio" name = "choix_jeu" value = "Code_Combat"> Code combat </label><br/>
		<label for ="robozzle">
		<input id = "robozzle" type = "radio" name = "choix_jeu" value = "Robozzle"> Robozzle </label><br/>
		<label for ="human_ressource_machine">
		<input id = "human_ressource_machine" type = "radio" name = "choix_jeu" value = "Human_Ressource-Machine"> Human Ressource Machine</label> <br/>
		<label for ="mission_grand_nord">
		<input id ="mission_grand_nord" type = "radio" name = "choix_jeu" value = "Mission_Grand_Nord"> Mission Grand Nord</label><br/>
		<label for ="vis_ma_vue">
		<input id = "vis_ma_vue" type="radio" name="choix_jeu" value = "Vis_ma_vue"> Vis ma vue </label><br/>
		<label> Justifiez votre choix : </label><br/>
		<label for = "justification">
		<textarea id = "justification"> Justifier ici</textarea></label><br/>
		<button type="submit" name="envoi">Valider</button>

	</form>

	<?php
		if(isset($_POST['choix_jeu']) && !empty($_POST['radio'])){
			echo "choix effectué";
		}
	?>

</body>
</html>