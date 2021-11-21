<?php 


if (!empty($_POST)) {

	if (!empty($_POST['message'])) {


		
		$sqlSelectMessage = "SELECT reservation_message FROM advert WHERE  id ='" . $_GET['id'] . "' ";
		
		$resultat_message = mysqli_query($connexion, $sqlSelectMessage);
		
		if(mysqli_num_rows($resultat_message) != 1 ){
			// SI la recherche de colonne email de la table user est égale à $email_inscription
			// alors l'email est déjà existant
			$message_error = "annonce deja reservée";  
			echo $message_error;
		}else{
			
			//$sql_insert_message = "INSERT INTO advert (id ,reservation_message) VALUES (NULL,'" . $_POST['message'] . "')";
			$sql_insert_message = "UPDATE `advert` SET `reservation_message` = '" . $_POST['message'] . "' WHERE `advert`.`id` = '" . $_GET['id'] . "'";
			
			if (mysqli_query($connexion, $sql_insert_message)) {
				
				echo "merci d'avoir reservé cette annonce";
				
			} else {
				
				echo "Erreur de requete SQL";
			}
		}
		
	} else {
		// echo "Attaque potentielle par téléchargement de fichiers.
		//       Voici plus d'informations :\n";
	}
}

$sqlAdvert = "SELECT * FROM `advert`  ";
$advert_table = mysqli_query($connexion, $sqlAdvert);
$resultat_advertALL = mysqli_fetch_all($advert_table, MYSQLI_ASSOC);   

$sqlSelectMessage = "SELECT reservation_message FROM advert WHERE id ='" . $_GET['id'] . "' ";


$resultat_message = mysqli_query($connexion, $sqlSelectMessage);










?>