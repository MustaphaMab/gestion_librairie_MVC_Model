<form method="POST" action="?controller=livres&action=all_livres_par_titre_resultat">

  <select name="select" class="form-select">
    <option selected>Choix par titre </option>
    <?php foreach ($livre as $l) : ?>
      <option value="<?= $l->Titre_livre ?>"><?= $l->Titre_livre ?></option>
    <?php endforeach; ?>
  </select>

  <input type="submit" value="Envoyer">
</form>