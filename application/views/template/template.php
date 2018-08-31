<!DOCTYPE html> 
<html lang="fr">

<head>
	<meta charset="UTF-8"><!--specifie aux Navigateurs le format d'encodage des pages web=prends en compte caracteres speciaux et supporte varietés de languages-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> <!-- meta pour le zoom et la largeur /// device-width = surface utilisable en px-->
	<meta name="description" content="Jean Forteroche son nouveau roman" /> <!-- meta description  -->
	<!-- <link rel="shortcut icon" href="images/...png"> <! ICONE DANS l'ONGLET du navigateur --> 
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet" type='text/css'> <!-- police du site -->
	<!-- <link rel="stylesheet" media="screen and (max-width: 1280px)" href="mediascreen.css"/> --> <!-- lien avec fichier mediascreen = mediaqueries -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css"/> <!--  lien avec la page css style -->
	<title>Jean Forteroche</title>
</head>

	<body>	

		<?php require("application/views/template/headerMenu.php"); ?>

    	<?php require("application/views/template/headerBanniere.php"); ?>

		<?php require("application/views/template/searchBar.php"); ?>

		<?= $content ?>

		

		<?php require("application/views/template/footer.php"); ?>	

     
		<?php require("assets/js/scripts.js"); ?>	
	
	</body>

</html>

