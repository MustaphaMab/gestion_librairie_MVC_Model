<div>
    <p> <?= isset($search) ? 'Recherche par ' . $search : '' ?></p>
    <table id='table'>
        <thead>
            <th>Titre_livre</th>
            <th>Date_achat</th>
            <th>Raison_sociale</th>
            <th>Editeur</th>
            <th>Prix_achat</th>
            <th>Nbr_exemplaires</th>


        </thead>
        <?php foreach ($commander as $c) : ?>
            <tr>
                <td><?= $c->Titre_livre ?></td> ;
                <td><?= $c->Date_achat ?></td>;
                <td><?= $c->Raison_sociale ?></td>;
                <td><?= $c->Editeur ?></td>;
                <td><?= $c->Prix_achat ?></td>;
                <td><?= $c->Nbr_exemplaires ?></td>;

                <td><a href="?controller=all_commandes&action=all_commandes_update" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></td>';


            </tr>
        <?php endforeach; ?>
    </table>
</div>