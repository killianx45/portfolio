<h1>Confirmation de la suppression du message n°<?= $formulaire->getId() ?> ?</h1>

<ul class="list-group">
    <li class="list-group-item">
        <strong>Name : </strong> <?= $formulaire->getNameEmail() ?>
    </li>
    <li class="list-group-item">
        <strong>Email : </strong> <?= $formulaire->getEmail() ?>
    </li>
    <li class="list-group-item">
        <strong>Résumé : </strong> <?= $formulaire->getContent() ?>
    </li>
</ul>

<form method="post">
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">Confirmer</button>
        <a href="<?= lien("formulaire", "liste") ?>" class="btn btn-danger">Annuler</a>
    </div>
</form>
