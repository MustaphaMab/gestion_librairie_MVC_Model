<form method="POST" action="?controller=livres&action=livres_par_auteur_resultat">
    <select name="select_auteur" class="form-select">
        <option selected>Choix par auteur </option>
        <?php foreach ($livre as $l) : ?>
            <option value="<?= $l->Nom_auteur ?>"><?= $l->Nom_auteur ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Envoyer">
</form>