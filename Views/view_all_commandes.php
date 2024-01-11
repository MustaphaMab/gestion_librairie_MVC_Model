<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'>
    <thead>
        <th>id_commande</th>
        <th>Id_Livre</th>
        <th>Id_fournisseur</th>
        <th>Date_achat</th>
        <th>Prix_achat</th>
        <th>Nbr_exemplaires</th>
        
        
    </thead>
    <?php  foreach($commander as $c ): ?>
    <tr>
        <td><?=$c->id_commande?></td>    
        <td><?=$c->Id_Livre?></td>
        <td><?=$c->Id_fournisseur?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        
        
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              