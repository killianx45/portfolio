<?php if(isset($erreurs)) : ?>
    <?php foreach($erreurs as $champ => $message): ?>
        <div class="alert alert-danger"><?= $champ ?> : <?= $message ?></div>
    <?php endforeach ?>
<?php endif ?>

<h1>Ajouter un message</h1>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name_email">Name</label>
        <input type="text" name="name_email" id="name_email" class="form-control" required value="<?= !empty($formulaire) ? $formulaire->getNameEmail() : "" ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" required value="<?= $formulaire->getEmail() ?? "" ?>">
    </div>
    <div class="form-group">
        <label for="content">Résumé</label>
        <textarea name="content" id="content"  class="form-control"><?= $formulaire->getContent() ?? "" ?></textarea>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-secondary">Effacer</button>
    </div>
</form>
