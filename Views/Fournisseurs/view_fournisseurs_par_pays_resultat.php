<div>
    <p> <?= isset($search) ? 'Recherche par ' . $search : '' ?></p>
    <table id='table'>
        <thead>
            <th>Code_fourniseurs</th>
            <th>Raison_sociales</th>
            <th>Rue_fournisseur</th>
            <th>Code_postal</th>
            <th>Localite</th>
            <th>Pays</th>

        </thead>
        <?php foreach ($fournisseurs as $f) : ?>
            <tr>
                <td><?= $f->Code_fournisseur ?></td>
                <td><?= $f->Raison_sociale ?></td>
                <td><?= $f->Rue_fournisseur ?></td>
                <td><?= $f->Code_postal ?></td>
                <td><?= $f->Localite ?></td>
                <td><?= $f->Pays ?></td>


            </tr>
        <?php endforeach; ?>
    </table>
</div>