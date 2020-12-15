<?php
    include('bddCall.php');
?>
<!-- liens à la bdd (je dois verifier l'injection bddCall est un fichier local) -->

<!-- ici mene le bouton sous le formulaire de page d'acceuil.html -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Kamarade ! Découvre ici nos dernières actualités ainsi que nos derniers évenements."/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title> Formulaire de partage notes</title>

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"/>

        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" />

        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- cette injection  cache la nav bar -->
        <?php include('navbar.php'); ?>


        <!-- script section -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>

        <script src="js/jquery.magnific-popup.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>