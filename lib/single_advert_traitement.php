<?php 

    // echo "toto : ".$_GET['id_article'];

    
     $id_advert = $_GET['id'];

     if(!empty($id_advert)){


         $sqlAdvert = "SELECT * FROM `advert` WHERE `id` = '".$id_advert."' ";
         $advert_table = mysqli_query($connexion, $sqlAdvert);
         $resultat_advert = mysqli_fetch_all($advert_table, MYSQLI_ASSOC);   

     }else{

        header('Location: index.php');

     }



