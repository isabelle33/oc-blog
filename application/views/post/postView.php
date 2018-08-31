<?php   
	// voir portfolioaccueil pour lier les elements
	// var_dump('title'); 

	//boucle while to recup data
	while ($donnees = $reponse->fetch())
{	
	// je ferme ma balise php
	?>
	<!-- j'affiche mon titre en H1 -->
	<h1> <?php echo $donnees['title']; ?> </h1><br /> 
	<p> <?php echo $donnees['author_post']; ?> </p><br /> 
	<p> <?php echo $donnees['created']; ?> </p><br /> 
	<p> <?php echo $donnees['updated']; ?> </p><br /> 
	<p> <?php echo $donnees['deleted']; ?> </p><br /> 
}
<!-- Fin de la boucle While -->
<?php
	// Termine le traitement de la requête
	$reponse->closeCursor(); 
?>