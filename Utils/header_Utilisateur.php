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

            <a href="?controller=home&action=formulaire_connexion">CONNEXION</a>

          </div>
        </div>

  


      </nav>

<?php
echo "Bonjour, ".$_SESSION['nom'] . ", vous êtes : " . $_SESSION['Statut']
?>

<a href="?controller=home&action=deconnexion" class="btn btn-danger">Deconnexion</a>




