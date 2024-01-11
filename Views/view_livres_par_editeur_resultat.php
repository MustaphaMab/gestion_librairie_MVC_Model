<form method="POST" action="?controller=livres&action=livres_par_éditeur_resultat">
    <select name="select_auteur" class="form-select">
        <option selected>Choix par éditeur </option>
        <?php foreach ($livre as $l) : ?>
            <option value="<?= $l->Editeur ?>"><?= $l->Editeur ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Envoyer">
</form>
<div>
    <p> <?= isset($search) ? 'Recherche par ' . $search : '' ?></p>
    <table id='table'>
        <thead>
            <th>Éditeur</th>
            <th>Nom de l'auteur</th>
            <th>ISBN</th>
            <th>Titre</th>
            <th>Theme</th>
            <th>Nombre de pages</th>
            <th>Format</th>
            <th>Prénom</th>
            <th>Année d'édition</th>
            <th>Prix</th>
            <th>Langue</th>
            <th>Nom de l'auteur</th>

        </thead>
        <?php foreach ($livre as $l) : ?>
            <tr>
                <td><?= $l->Editeur ?></td>
                <td><?= $l->Nom_auteur ?></td>
                <td><?= $l->ISBN ?></td>
                <td><?= $l->Titre_livre ?></td>
                <td><?= $l->Theme_livre ?></td>
                <td><?= $l->Nbr_pages_livre ?></td>
                <td><?= $l->Format_livre ?></td>
                <td><?= $l->Prenom_auteur ?></td>
                <td><?= $l->Annee_edition ?></td>
                <td><?= $l->Prix_vente ?></td>
                <td><?= $l->Langue_livre ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>