<?php

session_start();

require_once('lib/connexion.php');

require_once('lib/all_adverts_traitement.php');





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
            <a class="navbar-brand" href="index.php">ADVERT ANNONCE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="form_advert.php">Ajouter un annonce</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="all_adverts.php">Consulter toutes les annonces</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">

                <h1 class="display-4 fw-bolder"> DEPOSEZ VOS ANNONCES!!!!!!! </h1>
            </div>
        </div>
    </header>
    <div>
    </div>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" style="padding-top: 70px;">

        <?php foreach ($resultat_adverts as $key_adverts => $value_adverts) { ?>


            <div class="col mb-5">
                <div class="col mb-5">
                    <div class="card h-100">
                        
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <img class="card-img-top"  src="uploads/<?php echo $value_adverts['image']; ?>" alt="..." />
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $value_adverts['title']; ?></h5>
                                <!-- Product price-->
                                <?php echo $value_adverts['price']; ?> €
                            </div>
                        </div>
                        <!-- Product actions-->

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="single_advert.php?id=<?php echo $value_adverts['id']; ?>">Consulter l'annonce</a></div>
                        </div>
                    </div>
                </div>


            </div>
        <?php } ?>
    </div>
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