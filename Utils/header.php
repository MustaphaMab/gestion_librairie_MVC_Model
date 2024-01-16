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

<body>
  <?php
  session_start();
  ?>
  <header>



      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="?Controller=home">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Livres
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?controller=livres&action=all_livres">Tous les livres</a></li>
                  <li><a class="dropdown-item" href="?controller=livres&action=livres_par_titre">Par titre</a></li>
                  <li><a class="dropdown-item" href="?controller=livres&action=livres_par_auteur">Par auteur</a></li>
                  <li><a class="dropdown-item" href="?controller=livres&action=livres_par_editeur">Par éditeur</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fournisseurs
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?controller=fournisseurs&action=all_fournisseurs">Tous les fournisseurs</a></li>
                  <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseurs_par_raison_sociale">Par raison sociale</a></li>
                  <li><a class="dropdown-item" href="#">Par localité</a></li>
                  <li><a class="dropdown-item" href="#">Par pays</a></li>
                </ul>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Commandes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?controller=commandes&action=all_commandes">Toutes les commandes</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Par éditeur</a></li>
                  <li><a class="dropdown-item" href="#">Par fournisseur</a></li>
                  <li><a class="dropdown-item" href="#">Par date</a></li>
                </ul>

              </li>
            </ul>
            
          </div>
            <?php

            // affichage du nom et prenom lors de la connection
            // echo $_SESSION['username'];
            if(isset ($_SESSION['nom'])){
              echo "Bonjour , <br>". $_SESSION['nom'];
            }
              
            ?>
            <a href="?controller=home&action=formulaire_inscription">CONNEXION </a>
            <br>

            <!-- <a href="?controller=home&action=formulaire_deconnection">DECONNEXION</a> -->

        </div>
      



    </nav>


  </header>
</body>

</html>