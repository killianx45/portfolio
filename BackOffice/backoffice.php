<?php
session_start();
// Vérification de la présence d'une variable de session indiquant que l'utilisateur est en mode admin
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
  // Si l'utilisateur n'est pas en mode admin, on vérifie si un formulaire de connexion a été soumis
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['pseudo'] === 'harry1' && $_POST['mdp'] === 'jesaispas') {
    // Si le formulaire de connexion a été correctement rempli, on passe l'utilisateur en mode admin
    $_SESSION['admin'] = true;
  } else {
    // Sinon, on affiche un formulaire de connexion
    ?>
    <!DOCTYPE html>
     <html lang="fr">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Connexion</title>
          <link rel="stylesheet" href="../BackOffice/assets/scss/connexion.scss">
     </head>
     <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="">
            <h2>Connexion</h2>
            <div class="inputBox">
                <input  type="text" name="pseudo" required="required" autocomplete="off">
                <span>identifiant</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="mdp" required="required" autocomplete="off">
                <span>Mot de passe</span>
                <i></i>
            </div>
            <input type="submit" name="envoi" value="Login">
        </form>
    </div>
    </body>
     </html>
    <?php
    // On arrête l'exécution du script ici
    exit;
  }
}
include "includes/init.inc.php";


$methode =     $_GET["methode"] ?? "liste";
$controleur =  $_GET["controleur"] ?? "home";
$id =          $_GET["id"] ?? null;

$nomClasse = "Controleurs\\" . ucfirst($controleur) . "Controleur";
/* j'instancie un objet Controleur de manière dynamique ($nomClasse peut avoir n'importe quel
     nom de classe Controleur) */
$controleur = new $nomClasse;
$controleur->$methode($id);