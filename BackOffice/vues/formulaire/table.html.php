<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Résumé</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($formulaires as $formulaire): ?>
        <tr>
            <!-- Table Row -->
            <td>
                <?= $formulaire->getId() ?>
            </td>
            <td>
                <?= $formulaire->getNameEmail() ?>
            </td>
            <td>
                <?= $formulaire->getEmail() ?>
            </td>
            <td>
                <?= $formulaire->getContent() ?>
            </td>


            <td>
                <a href="<?= lien("formulaire", "modifier", $formulaire->getId()) ?>">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="<?= lien("formulaire", "supprimer", $formulaire->getId()) ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>

    </tfoot>
</table>
