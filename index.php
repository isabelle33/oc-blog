<!-- ROUTEUR WEBSITE -->
<?php 
	// inclure le controller 
	include('application/controllers/controller.php');

	// je test si il a des enregistrements dans la table post sup a zero 

	// J affiche les enregistrements

	// sinon j affiche message d erreur :

	if (isset($_GET['action'])) {
		
		if ($_GET['action'] == 'posts') { // A REVOIR PAS CLAIR
			if (isset($_GET['id']) && $_GET['id'] > 0) {	
		        listPosts();    
		    } else {
		        echo 'Erreur : pas de publication à ce jour';
		 	}
		} 
	} else { 
		listPosts();

	} // 	
?>




