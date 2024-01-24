<form method="POST" action="?controller=commandes&action=commandes_par_editeur_resultat">

  <select name="select_editeur" class="form-select">
    <option selected>Choix par titre </option>
    <?php foreach ($commandes as $f) : ?>
      <option value="<?= $f->Editeur ?>"><?= $f->Editeur ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Envoyer">
</form>