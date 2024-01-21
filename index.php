<!DOCTYPE html>
<html lang="fr">
<head>
	    <link rel="stylesheet" type="text/css" href="style.css">
		<title>Site web sur les Serious Game</title>
		<meta charset="UTF-8" >
	</head>
	<body>
		<div id="conteneur">	
			<header id = "accueil">	
				<h1>Le site de Florian Lefebvre en M1</h1>	
				<h2>Les Serious Game, principes et applications</h2> 
				<img src = "img/logo.png" alt = "logo de serious game" width="50" height = "30">
			</header>
			<nav>
				<p><a href="index.php">Accueil</a></p>
				<p><a href="index.php?page=thématiques/thematiques_generales.html" class="lien-transition">Thématiques générales</a></p>
				<p><a href="index.php?page=programmation/programmation.html" class="lien-transition">Programmation </a></p>
				<p><a href="index.php?page=handicap/handicap.html" class="lien-transition">Handicap </a></p>
				<p><a href="index.php?page=ergonomie/ergonomie.html" class="lien-transition">Ergonomie </a></p>
				<p><a href="index.php?page=langue_des_signes/langue_des_signes.html" class="lien-transition">Langue des signes </a></p>
				<!--<p><a href="index.php?page=sondage/sondage.php" target="_blank" class="lien-transition">Sondage</a></p>-->
				<p><a href="sondage/sondage.php" target="_blank" onclick="window.open(this.href,'sondage','width=700,height=600,left=400,top=300'); return false;" class="lien-transition">Sondage</a></p>
				<p><a href="mailto:florian.lefebvre03@etud.univ-paris8.fr" class="lien-transition">Contact</a></p>
			</nav>
			<main>
				<aside id="gauche">
					<h3>Informations</h3>
					<ul>
					<li><a href="index.php?page=informations/objectif.html">Objectifs du site</a></li>
					<li><a href="index.php?page=informations/qui_suis_je.html">Qui suis-je ?</a></li>
					<li><a href="index.php?page=informations/mes_projets.html">Mes projets</a></li>
					<li><a href="informations/projet_rust.pdf">Un serious game en L2 </a></li>
					<!--<li><a href="informations/cv.html" target="_blank">Mon CV</a></li>-->
					<!--<li><a href="informations/cv.html" target="_blank" onclick="window.open(this.href,'mon CV','width=700,height=600,left=(screen.width-700)/2,top=(screen.height-600)/2'); return false;">Mon CV</a></li>-->

					<li><a href="informations/cv.html" target="_blank" onclick="window.open(this.href,'mon CV','width=700,height=600,left=400,top=300'); return false;">Mon CV</a></li>
					</ul>
				</aside>
				<div>
					<?php
					if(isset($_GET['page'])){
						$page = $_GET['page'];
						$contenu = file_get_contents($page);
						echo $contenu;
					}
					else {

						$contenu = file_get_contents("generalites.html");
						echo $contenu;
					} ?>

				</div>
				<aside id="droite">
					<h3>Articles</h3>
					<ul>
					<li><a href="articles/outils_programmations.pdf">Alice, Greenfoot, prog&play </a></li>
					<li><a href="articles/article1.pdf">Greenfoot et les Serious Game</a></li>
					<li><a href="articles/programGreenfoot.pdf">Des tutoriels sur Greenfoot</a></li>
					</ul>
				</aside> 
			</main>
			<footer>
				<p> Auteur : Florian Lefebvre </p>
			</footer>
		</div>
	</body>
</html>





