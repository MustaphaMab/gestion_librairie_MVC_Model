<p><?= isset($search) ? 'Recherche par ' . $search : '' ?></p>

<table  class="table table-striped w-75 mx-auto" id='table'>
    <thead>
        <th>Titre_livre</th>
        <th>Raison_sociale</th>
        <th>id_commande</th>
        <th>Date_achat</th>
        <th>Prix_achat</th>
        <th>Nbr_exemplaires</th>
    </thead>
    <?php if (!empty($commander)) : ?>
        <?php foreach ($commander as $c) : ?>
            <tr>
                <td><?= $c->Titre_livre ?></td>
                <td><?= $c->Raison_sociale ?></td>
                <td><?= $c->id_commande ?></td>
                <td><?= $c->Date_achat ?></td>
                <td><?= $c->Prix_achat ?></td>
                <td><?= $c->Nbr_exemplaires ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Aucune donnée disponible</td>
        </tr>
    <?php endif; ?>
</table>