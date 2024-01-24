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
                <td>


                <td><a href="?controller=livres&action=modifier_livre&id=<?= $l->Id_Livre ?>">
                        <button type="update" class="btn btn-warning btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a></td>
                <a href="?controller=livres&action=suprimer_livre&id=<?= $l->Id_Livre ?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button></a>

                </td>
                <td><a href="" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></td>';
            </tr>
        <?php endforeach; ?>
    </table>
</div>