<?php

namespace Controleurs;

use Modeles\Bdd;
use Modeles\Entites\Formulaire;

class FormulaireControleur {
    public function liste()
    {
        $formulaires = Bdd::select("formulaire");
        
        include "vues/header.html.php";
        include "vues/formulaire/table.html.php";
        include "vues/footer.html.php";        
    }

    public function ajouter()
    {
        if( $_POST ){

            // A FAIRE : validation du formulaire
            $f = new Formulaire;
            $f->setNameEmail($_POST["name_email"]);
            $f->setEmail($_POST["email"]);
            $f->setContent($_POST["content"]);
        
            $resultat = Bdd::insertFormulaire($f);
        
            if( $resultat ){
                header("Location: backoffice.php");
                exit;
            } else {
                echo "Erreur SQL lors de l'insertion";
            }
        }
        
        // AFFICHAGE
        $formulaire = new Formulaire;
        include "vues/header.html.php";
        include "vues/formulaire/form.html.php";
        include "vues/footer.html.php";
    }

    public function modifier($id)
    {
        $formulaire = Bdd::selectById("formulaire", $id);
        
        if($_POST){
            $name_email = $_POST["name_email"] ?? null;
            $email = $_POST["email"] ?? null;
            $content = $_POST["content"] ?? null;
        
            if( !empty($name_email) && !empty($email) ) {
                if( strlen($name_email) > 50 ) {
                    $erreurs["name_email"] = "Votre nom ne doit pas dépasser 50 caractères";
                }
                if( strlen($name_email) < 4 ) {
                    $erreurs["name_email"] = "Votre nom doit avoir au moins 4 caractères";
                }
                if( strlen($email) > 75 ) {
                    $erreurs["email"] = "Votre mail ne doit pas dépasser 30 caractères";
                }
                if( strlen($email) < 4 ) {
                    $erreurs["email"] = "Votre mail doit avoir au moins 4 caractères";
                }
            } else {
                $erreurs["generale"] = "Veuillez remplir les champs requis";
            }
        
            if( empty($erreurs) ){
                $formulaire->setNameEmail($name_email);
                $formulaire->setEmail($email);
                $formulaire->setContent($content);
                if( Bdd::updateFormulaire($formulaire) ){
                    redirection("backoffice.php");
                } else {
                    $erreurs["generale"] = "Erreur lors de la modification en bdd";
                }
            }
        
        }
        include "vues/header.html.php";
        include "vues/formulaire/form.html.php";
        include "vues/footer.html.php";
    }

    public function supprimer($id)
    {

        if($id) {
            if( is_numeric($id) ) {
                $formulaire = Bdd::selectById("formulaire", $id);

                if($formulaire) {
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if( Bdd::deleteFormulaire($formulaire) == 1 ) {
                            redirection("backoffice.php");
                        }
                    }
                } else {
                    redirection("backoffice.php");
                }
            }
        }
        affichage("formulaire/suppression.html.php", [ "formulaire" => $formulaire ]);
    }
}