<?php 
	//connexion a la bdd
	require ("application/config/pdo.php"); 
	// ****** a transformer en objet, "class" avec functions. get post get listpost****** 

	// On crée une requête qui selec tous les posts / selec = afficher contenu de la table
	//que l'on stock ds la Var $reponse 
	//select all from  table 'post' for example
	$reponse = $bdd->query('SELECT * FROM posts');


	/*$reponse = new bdd; 

	class bdd{
		private $_
	}*/
?>

