<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>




    <div class=" w-100 d-flex justify-content-center" style="background-color: #E9ECEF">
        <a href=" #" class="text-danger"><i class="fa fa-facebook mr-4"></i></a>
        <a href="#" class="text-danger"><i class="fa fa-twitter mr-4"></i></a>
        <a href="#" class="text-danger"><i class="fa fa-google-plus mr-4"></i></a>
        <a href="#" class="text-danger"><i class="fa fa-linkedin mr-4"></i></a>
        <a href="#" class="text-danger"><i class="fa fa-instagram"></i></a>
    </div>
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark ">
        <div class="ml-2 mr-2">
            <img style="width: 5vw" src="img/logo/FA.png" alt="">
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?page=accueil">ACCUEIL</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?page=contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?page=connexion_apprenant">ESPACE APPRENANT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?page=connexion">ESPACE ADMIN</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        OFFRE FORMATION
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#exampleModal">Afficher la liste</a>
                        <div class="dropdown-divider "></div>
                        <a class="dropdown-item text-danger" href="#">Télécharger la liste</a>
                    </div>
                </li>
            </ul>
        </div>

    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-danger">Save changes</button>
                </div>
            </div>
        </div>
    </div>