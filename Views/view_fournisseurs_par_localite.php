<form method="POST" action="?controller=fournisseurs&action=fournisseurs_par_localite_resultat">
    <select name="select_raison_sociale" class="form-select">
        <option selected>Choix par Raison sociale </option>
        <?php foreach ($fournisseurs as $f) : ?>
            <option value="<?= $f->Raison_sociale ?>"><?= $f->Raison_sociale ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Envoyer">
</form>