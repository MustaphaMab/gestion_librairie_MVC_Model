<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Content/css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Document</title>
</head>

<body class="p-3 mb-2 bg-info-subtle text-emphasis-info">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ml-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="?controller=home&action=home">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <?php

        if (isset($_SESSION['nom'])) {

          if ($_SESSION['Statut'] === 'Admin') {
            include('header_Admin.php');
          } else {
            include('header_Utilisateur.php');
          }
        } else {
          echo "Vous n'etes pas connecté";

        ?>
          <a class="btn btn-primary" href="?controller=home&action=formulaire_connexion">CONNEXION</a>
          <H1>Bienvenue dans notre libraire</H1>
          <h1>Connectez-vous pour une expérience personnalisée.</h1>
        <?php
        }

        ?>


  </header>


</body>

</html>