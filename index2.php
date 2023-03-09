<?php
	// Vérification que le formulaire a été soumis avec des données
	if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nom"]) && !empty($_POST["commentaire"])) {
		
		// Récupération des données du formulaire
		$nom = $_POST["nom"];
		$commentaire = $_POST["commentaire"];

		// Ajout du commentaire au fichier
		$fichier = fopen("commentaires.txt", "a");
		fwrite($fichier, "$nom : $commentaire\n");
		fclose($fichier);

		// Redirection vers la page d'accueil
		header("Location: index.php");
		exit();
	} else {
		// Si le formulaire est incomplet, on renvoie l'utilisateur à la page d'accueil
		header("Location: index.php");
		exit();
	}
?>
