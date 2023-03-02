<?php
session_start();

if(isset($erreurs)) : ?>
    <?php foreach($erreurs as $champ => $message): ?>
        <div class="alert alert-danger"><?= $champ ?> : <?= $message ?></div>
    <?php endforeach ?>
<?php endif ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="assets/scss/contact.css">
</head>
<body>
    <form class="container" method="post" enctype="multipart/form-data">
        <h2>Formulaire de contact</h2>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="name_email" id="name_email" required="required" value="<?= !empty($formulaire) ? $formulaire->getNameEmail() : "" ?>">
                    <span class="text">Name</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="email" id="email" required="required" value="<?= !empty($formulaire) ? $formulaire->getEmail() : "" ?>">
                    <span class="text">E-Mail</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <div class="inputBox textarea">
                    <textarea name="content" id="content"><?= !empty($formulaire) ? $formulaire->getContent() : "" ?></textarea>
                    <span class="text">Tape ton message ici...</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <button type="submit">Enregistrer</button>
                <button type="reset">Effacer</button>
                <a href="index.php">Home</a>
            </div>
        </div>
    </form>
</body>
</html>

<?php include "./BackOffice/includes/init.inc.php";