<form method="POST" action="?controller=commandes&action=commandes_par_fournisseur_resultat">

  <select name="select_fournisseur" class="form-select">
    <option selected>Choix par titre </option>
    <?php foreach ($commander as $f) : ?>
      <option value="<?= $f->Id_fournisseur ?>"><?= $f->Id_fournisseur ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Envoyer">
</form>