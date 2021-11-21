<?php

    $sqlRequest = "SELECT * FROM `advert` ORDER BY id DESC";
    $user_table = mysqli_query($connexion, $sqlRequest);
    $resultat_adverts = mysqli_fetch_all($user_table, MYSQLI_ASSOC);

/* echo "<pre>";
print_r( $resultat_advert);
echo "</pre>";
 */
 