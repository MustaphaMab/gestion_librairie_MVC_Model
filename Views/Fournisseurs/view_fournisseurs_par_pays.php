<form method="POST" action="?controller=fournisseurs&action=fournisseurs_par_pays_resultat">

  <select name="select_pays" class="form-select">
    <option selected>Choix par pays </option>
    <?php foreach ($fournisseurs as $f) : ?>
      <option value="<?= $f->Pays ?>"><?= $f->Pays ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Envoyer">
</form>