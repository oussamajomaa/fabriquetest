<?php require 'header.php'; ?>

<div main="" >

    <?php

    if ($_GET['page'] == '') {
        require 'accueil.php';
    }
    if ($_GET['page'] == 'accueil') {
        require 'accueil.php';
    }
    if ($_GET['page'] == 'contact') {
        require 'contact.php';
    }
    if ($_GET['page'] == 'admin') {
        require 'admin.php';
    }
    if ($_GET['page'] == 'super_admin') {
        require 'super_admin.php';
    }
    if ($_GET['page'] == 'partenaire') {
        require 'partenaire.php';
    }
    if ($_GET['page'] == 'admin/formateur') {
        require 'admin.php';
    }
    if ($_GET['page'] == 'admin/apprenant') {
        require 'admin.php';
    }
    if ($_GET['page'] == 'admin/apprenant/propos') {
        require 'admin.php';
    }
    if ($_GET['page'] == 'connexion') {
        require 'connexion.php';
    }
    if ($_GET['page'] == 'connexion_admin') {
        require 'connexion_admin.php';
    }
    if ($_GET['page'] == 'connexion_apprenant') {
        require 'connexion_apprenant.php';
    }

    ?>


</div>
<?php require 'footer.php'; ?>