<?php

session_start();

require_once('lib/connexion.php');
require_once('lib/form_traitment_new_advert.php');

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
        </div>
    </nav>
    <!-- Header-->
    <h2 class="display-7  "> AJOUTER UNE ANNONCE</h2>

    <div class="container" style = "width:50%">
        <form method="post" enctype="multipart/form-data">
            <!-- title input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Titre</label>
                <input type="text" id="form4Example1" name = "title" class="form-control" />
            </div>

            <!-- Description input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Description</label>
                <input type="text" id="form4Example1" name = "description" class="form-control" />
            </div>

            <!-- code postale input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Code Postal</label>
                <input type="number" id="form4Example1" name = "postal_code" class="form-control" />
            </div>
            
            <!-- ville input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Ville</label>
                <input type="text" id="form4Example1" name = "city" class="form-control" />
            </div>
            
            <!-- type input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Type</label>
                <input type="text" id="form4Example1" name = "type" class="form-control" placeholder="Location ou vente" />
            </div>
            
            <!-- price input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Prix</label>
                <input type="text" id="form4Example1" name = "price" class="form-control"  />
            </div>
            
            <!-- image input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Image</label>
                <input type="file" id="form4Example1" name = "image" class="form-control"  />
            </div>


           
            

            <!-- Message input -->
          <!--   <div class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Message</label>
            </div> -->

            <!-- Submit button -->
            <input type="submit" name="envoie_form_inscription" class="btn btn-primary btn-block mb-4" value="Ajouter">
        </form>
    </div>


   
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" style="padding-top: 70px;">

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