<form method="POST" action="?controller=fournisseurs&action=fournisseurs_par_localite_resultat">

  <select name="select_localite" class="form-select">
    <option selected>Choix par localité </option>
    <?php foreach ($fournisseurs as $f) : ?>
      <option value="<?= $f->Localite ?>"><?= $f->Localite ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Envoyer">
</form>