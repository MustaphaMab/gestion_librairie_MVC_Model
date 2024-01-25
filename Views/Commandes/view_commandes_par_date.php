<form method="POST" action="?controller=commandes&action=commande_par_date_resultat">

  <select name="select_date" class="form-select">
    <option selected>Choix par date </option>
    <?php foreach ($commander as $c) : ?>
      <option value="<?= $c->Date_achat ?>"><?= $c->Date_achat ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Envoyer">
</form>