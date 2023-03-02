<?php if(isset($erreurs)) : ?>
    <?php foreach($erreurs as $champ => $message): ?>
        <div class="alert alert-danger"><?= $champ ?> : <?= $message ?></div>
    <?php endforeach ?>
<?php endif ?>

<h1>Ajouter un projet</h1>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name_projet">Name</label>
        <input type="text" name="name_projet" id="name_projet" class="form-control" required value="<?= !empty($projet) ? $projet->getNameProjet() : "" ?>">
    </div>
    <div class="form-group">
        <label for="image_projet">Image</label>
        <input type="file" name="image_projet" id="image_projet" class="form-control" value="<?= $projet->getImageprojet() ?? "" ?>">
    </div>
    <div class="form-group">
        <label for="resumer">Résumé</label>
        <textarea name="resumer" id="resumer"  class="form-control"><?= $projet->getResumer() ?? "" ?></textarea>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Effacer</button>
    </div>
</form>
