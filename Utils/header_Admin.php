<div class="collapse navbar-collapse " id="navbarSupportedContent">

    <ul>
        <a class="btn btn-info" href="?controller=livres&action=all_livres_admin">Tous les livres</a>

    </ul>

    <ul>
        <a class="btn btn-info" href="?controller=fournisseurs&action=all_fournisseurs_admin">Tous les Fournisseurs</a>

    </ul>

    <ul>
        <a class="btn btn-info" href="?controller=commandes&action=all_commandes_admin">Toutes les commandes</a>

    </ul>

</div>


<?php


if (isset($_SESSION['nom'])) {

    echo "Bonjour " . $_SESSION['prenom'] . ". Vous êtes : " . $_SESSION['Statut'];
}


?>

<a href="?controller=home&action=deconnexion" class="btn btn-outline-warning">Deconnexion</a>