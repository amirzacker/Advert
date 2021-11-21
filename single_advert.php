<?php

session_start();

require_once('lib/connexion.php');

require_once('lib/all_adverts_traitement.php');
require_once('lib/single_advert_traitment_message.php');
require_once('lib/single_advert_traitement.php');







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>

        </div>
        </div>
    </nav>
    <!-- Header-->
    <div>

    </div>

    <!-- Product section-->
    <section class="py-5"> <?php foreach ($resultat_advert as $key_advert) { ?>

            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <div class="small mb-1"></div>
               
                        <div class="fs-5 mb-5">

                            <img class="card-img-top" src="uploads/<?php echo $key_advert['image']; ?>" alt="..." />
                        </div>
                       

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Titre :</label>
                            <?php echo $key_advert['title']; ?>
                        </div>

                        <!-- Description input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Code Postal :</label>
                            <?php echo $key_advert['price']; ?>
                        </div>

                        <!-- code postale input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Ville :</label>
                            <?php echo $key_advert['postal_code']; ?>
                        </div>

                        <!-- ville input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Prix :</label>
                            <?php echo $key_advert['city']; ?>
                        </div>

                        <!-- type input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Type :</label>
                            <?php echo $key_advert['type']; ?>

                        </div>

                        <!-- price input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Description :</label>
                            <?php echo $key_advert['description']; ?>

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1">Message :</label>
                            <?php echo $key_advert['reservation_message']; ?>

                        </div>
                    </div>
                <?php } ?>
                <div class="d-flex">
                    <?php

                    $sqlSelectMessage = "SELECT reservation_message FROM advert WHERE reservation_message  IS NULL AND id ='" . $_GET['id'] . "' ";

                    $resultat_message = mysqli_query($connexion, $sqlSelectMessage);
                    ?>

                    <?php if (mysqli_num_rows($resultat_message) != 1) { ?>

                        <button type="button" class="btn btn-lg btn-primary" disabled>Annonce deja reservée</button>

                    <?php
                    } else { ?>

                        <div class="container" style="width:100%">
                            <form id="inscription" method="post">
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" name="message" id="form4Example3" rows="4"></textarea>
                                    <label class="form-label" for="form4Example3">Message</label>
                                </div>

                                <!-- Submit button -->
                                <input type="submit" name="envoie_form_inscription" class="btn btn-primary btn-block mb-4" value="Je réserve">
                            </form>
                        </div>


                </div>
                </div>
            </div>
            </div>
        <?php


                    } ?>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
        <h1 class="display-5 fw-bolder">Liste des Annonces</h1>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($resultat_advertALL as $key_advert => $value_advert) { ?>
                    <?php if ($value_advert['id'] != $_GET['id']) { ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <div class="card-body p-4">


                                    <div> Type: <?php echo $value_advert['type']; ?>
                                    </div>
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $value_advert['title']; ?></h5>
                                        <!-- Product price-->
                                        <?php echo $value_advert['price']; ?> €
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?id=<?php echo $value_advert['id']; ?>">Consulter l'annonce</a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                <?php
                } ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>