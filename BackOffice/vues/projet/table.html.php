<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Résumé</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($projets as $projet): ?>
        <tr>
            <!-- Table Row -->
            <td>
                <?= $projet->getId() ?>
            </td>
            <td>
                <?= $projet->getNameProjet() ?>
            </td>
            <td>
                <img src="data:image/jpeg;base64,<?= base64_encode($projet->getImageProjet()) ?>" width="150px" height="100px">
            </td>
            <td>
                <?= $projet->getResumer() ?>
            </td>


            <td>
                <a href="<?= lien("projet", "modifier", $projet->getId()) ?>">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="<?= lien("projet", "supprimer", $projet->getId()) ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>

    </tfoot>
</table>
