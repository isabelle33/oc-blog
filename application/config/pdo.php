<?php 
//connexion Bdd  // PDO = LE CONNECTEUR OBJET 

//connexion BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_php4', 'isaMarcelly', 'AEIOUY33440');
}
catch(Exception $e) // en dors de l'accolade

{
	// En cas d’erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
} 
// ******CREER FONCTION DB CONNECT ****** puis include PDO dans modele et re utiliser la function crée. 
?>