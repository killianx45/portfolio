<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entites\Projet;

class ProjetControleur {
    public function liste()
    {
        $projets = Bdd::select("projet");
        
        include "vues/header.html.php";
        include "vues/projet/table.html.php";
        include "vues/footer.html.php";        
    }

    public function ajouter()
    {
        if( $_POST ){

            // A FAIRE : validation du projet
            $p = new Projet;
            $p->setNameProjet($_POST["name_projet"]);
            $p->setImageProjet($_FILES["image_projet"]);
            $p->setResumer($_POST["resumer"]);
            if (isset($_FILES['image_projet']) && $_FILES['image_projet']['error'] === UPLOAD_ERR_OK) {
                $image_projet = file_get_contents($_FILES["image_projet"]["tmp_name"]);
                $p->setImageProjet($image_projet);
            }
        
            $resultat = Bdd::insertProjet($p);
        
            if( $resultat ){
                header("Location: backoffice.php");
                exit;
            } else {
                echo "Erreur SQL lors de l'insertion";
            }
            
        }
        
        // AFFICHAGE
        $projet = new Projet;
        include "vues/header.html.php";
        include "vues/projet/form.html.php";
        include "vues/footer.html.php";
    }

    public function modifier($id)
    {
        $projet = Bdd::selectById("projet", $id);
        
        if($_POST){
            $name_projet = $_POST["name_projet"] ?? null;
            $resumer = $_POST["resumer"] ?? null;

            if (isset($_FILES['image_projet']) && $_FILES['image_projet']['error'] === UPLOAD_ERR_OK) {
                $image_projet = file_get_contents($_FILES["image_projet"]["tmp_name"]);
                $projet->setImageProjet($image_projet);
            }
        
            if( !empty($name_projet)) {
                if( strlen($name_projet) > 50 ) {
                    $erreurs["name_projet"] = "le nom du projet ne doit pas dépasser 50 caractères";
                }
                if( strlen($name_projet) < 4 ) {
                    $erreurs["name_projet"] = "Le nom du projet doit avoir au moins 4 caractères";
                }
            } else {
                $erreurs["generale"] = "Veuillez remplir les champs requis";
            }
        
            if( empty($erreurs) ){
                $projet->setNameProjet($name_projet);

                $projet->setResumer($resumer);
                if( Bdd::updateProjet($projet) ){
                    redirection("backoffice.php");
                } else {
                    $erreurs["generale"] = "Erreur lors de la modification en bdd";
                }
            }
        
        }
        include "vues/header.html.php";
        include "vues/projet/form.html.php";
        include "vues/footer.html.php";
    }

    public function supprimer($id)
    {

        if($id) {
            if( is_numeric($id) ) {
                $projet = Bdd::selectById("projet", $id);

                if($projet) {
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if( Bdd::deleteProjet($projet) == 1 ) {
                            redirection("index.php");
                        }
                    }
                } else {
                    redirection("backoffice.php");
                }
            }
        }
        affichage("projet/suppression.html.php", [ "projet" => $projet ]);
    }
}