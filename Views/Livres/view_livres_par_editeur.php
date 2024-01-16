<form method="POST" action="?controller=livres&action=livres_par_editeur_resultat">
<select  name="select_titre" class="form-select" >
  <option selected>Choix par éditeur </option>
  <?php foreach ($livre as $l) : ?>
  <option value="<?=$l->Editeur?>"><?=$l->Editeur?></option>
  <?php endforeach; ?>
</select>
<input type="submit" value="Envoyer">
</form> 