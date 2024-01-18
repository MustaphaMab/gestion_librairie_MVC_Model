<?php


// Vérifier si un ID de livre est passé
if (isset($_GET['Id_Livre'])) {
    $id_livre = $_GET['Id_Livre'];

    // Récupérer les données du livre à partir de la base de données
    // (implémente cette logique en fonction de ta structure)
    $livre = ($id_livre);

    if ($livre) {
        // Afficher le formulaire de mise à jour
?>
        <h2>Modifier Livre</h2>
        <form action="?controller=livres&action=all_update_livre" method="post">
            <input type="hidden" name="id_livre" value="<?= $livre->Id_Livre ?>">

            <label for="titre">Titre :</label>
            <input type="text" name="titre" value="<?= $livre->Titre_livre ?>" required><br>

            <label for="theme">Thème :</label>
            <input type="text" name="theme" value="<?= $livre->Theme_livre ?>" required><br>

            <label for="nbr_pages">Nombre de pages :</label>
            <input type="number" name="nbr_pages" value="<?= $livre->Nbr_pages_livre ?>" required><br>

          

            <button type="submit" name="update_btn">Mettre à jour</button>
        </form>
<?php
    } else {
        echo "Livre non trouvé.";
    }
} else {
    echo "ID de livre non spécifié.";
}
?>
