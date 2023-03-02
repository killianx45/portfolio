<h1>Confirmation de la suppression du projet n°<?= $projet->getId() ?> ?</h1>

<ul class="list-group">
    <li class="list-group-item">
        <strong>Name : </strong> <?= $projet->getNameProjet() ?>
    </li>
    <li class="list-group-item">
        <strong>Image : </strong> <?= $projet->getImageprojet() ?>
    </li>
    <li class="list-group-item">
        <strong>Résumé : </strong> <?= $projet->getResumer() ?>
    </li>
</ul>

<form method="post">
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">Confirmer</button>
        <a href="<?= lien("projet", "liste") ?>" class="btn btn-danger">Annuler</a>
    </div>
</form>
