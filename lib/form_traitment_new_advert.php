<?php


if (!empty($_POST)) {

	if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['postal_code']) && !empty($_POST['city']) && !empty($_POST['type']) && !empty($_POST['price']) && !empty($_FILES['image']['name'])) {

		$uploaddir = 'uploads/';
		$uploadfile = $uploaddir . basename($_FILES['image']['name']);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
			// echo "Le fichier est valide, et a été téléchargé
			//        avec succès. Voici plus d'informations :\n";

			$image_advert = $_FILES['image']['name'];
			$sql_insert_advert = "INSERT INTO advert (id, title, description , postal_code, city, type, price,image) VALUES (NULL,'" . $_POST['title'] . "','" . $_POST["description"] . "','" . $_POST["postal_code"] . "','" . $_POST['city'] . "','" . $_POST['type'] . "','" . $_POST['price'] . "','" . $image_advert . "')";

			if (mysqli_query($connexion, $sql_insert_advert)) {

				echo "Annonce ajoutée";
				header("Location: confirmation.php?titleAdvert='" . $_POST['title'] . "'");
				
			} else {

				echo "Erreur de requete SQL";
			}
		} else {
			echo "tous les champs doivent etre rempli";
		}
	} else {
		//echo "attanque potentielle telecharger un fichier type image";
	}
}


