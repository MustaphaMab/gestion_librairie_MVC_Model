<div class="container">
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <?php var_dump($data); ?>
<table class="table table-bordered" id='table'>
    <thead>
        <th class="table-danger">id_commande</th>
        <th class="table-danger">Nbr_exemplaires</th>
        <th class="table-danger">Titre_livre</th>
        <th class="table-danger">fournisseur</th>   
        <th class="table-danger">Date_achat</th>
        <th class="table-danger">Prix_achat</th>
         
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->id_commande?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        <th><?=$c->Titre_livre?></th>
        <th><?=$c->Raison_sociale?></th>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
       
       
    </tr>
    <?php endforeach; ?>
</table>
</div>   