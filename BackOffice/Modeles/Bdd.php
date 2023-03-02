<?php
/**
Le mot-clé 'abstract' avant le mot 'class' permet de définir une classe
abstraite. 
1. Une classe abstraite ne peut être instanciée (on ne peut pas écrire
    $bdd = new Bdd; )
2. Dans une classe abstraite, on peut définir des méthodes abstraites.
    Ces méthodes n'auront pas de code, juste une définition.
        ex: public function test(arg1, arg2);
    Il n'y a pas {} et il y a un ; après les () de la méthode abstraite.
    - Toutes les classes qui héritent d'une classe abtraite doivent 
    implémenter les méthodes abstraites définies dans la classe mère.
    (implémenter = fournir du code à cette méthode)

 */
namespace Modeles;
use PDO;
use Modeles\Entites\Formulaire;  // avec 'use', on définit un alias à la classe Modeles\Entites\Formulaire
use Modeles\Entites\Projet;

abstract class Bdd {
    public static function pdo()
    {
        return new \PDO("mysql:host=127.0.0.1:3306;dbname=portfolio", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT ]);
    }

    public static function select(string $table){
        $pdostatement = self::pdo()->query("SELECT * FROM $table");
        return $pdostatement->fetchAll(PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst($table) );       
    }

    public static function selectById(string $table, int $id)
    {
        $pdostatement = self::pdo()->query("SELECT * FROM $table WHERE id = " . $id);
        $pdostatement->setFetchMode(PDO::FETCH_CLASS, "Modeles\Entites\\" . ucfirst($table));
        return $pdostatement->fetch();
    }

    public static function insertFormulaire(Formulaire $formulaire)
    {
        $texteRequete = "INSERT INTO formulaire (name_email, email, content) 
                         VALUES (:name_email, :email, :content)";
        $pdostatement = self::pdo()->prepare($texteRequete);
        $pdostatement->bindValue(":name_email",  $formulaire->getNameEmail());
        $pdostatement->bindValue(":email", $formulaire->getEmail());
        $pdostatement->bindValue(":content", $formulaire->getContent());
        return $pdostatement->execute();
    }

    public static function updateFormulaire(Formulaire $formulaire) : bool
    {
        $texteRequete = "UPDATE formulaire 
                        SET name_email = :name_email, email = :email, content = :content
                        WHERE id = :id";
        $pdostatement = self::pdo()->prepare($texteRequete);
        $pdostatement->bindValue(":name_email", $formulaire->getNameEmail());
        $pdostatement->bindValue(":email", $formulaire->getEmail());
        $pdostatement->bindValue(":content", $formulaire->getContent());
        $pdostatement->bindValue(":id", $formulaire->getId());
        return $pdostatement->execute();
    }

    public static function deleteFormulaire(Formulaire $formulaire)
    {
        return self::pdo()->exec("DELETE FROM formulaire WHERE id = " . $formulaire->getId());
        
    }

    public static function insertProjet(Projet $projet)
    {
        $texteRequete = "INSERT INTO projet (name_projet, image_projet, resumer) 
                         VALUES (:name_projet, :image_projet, :resumer)";
        $pdostatement = self::pdo()->prepare($texteRequete);
        $pdostatement->bindValue(":name_projet",  $projet->getNameProjet());
        $pdostatement->bindValue(":image_projet", $projet->getImageProjet(), PDO::PARAM_LOB);
        $pdostatement->bindValue(":resumer", $projet->getResumer());
        return $pdostatement->execute();
    }

    public static function updateProjet(Projet $projet) : bool
    {
        $texteRequete = "UPDATE projet 
                        SET name_projet = :name_projet, image_projet = :image_projet, resumer = :resumer
                        WHERE id = :id";
        $pdostatement = self::pdo()->prepare($texteRequete);
        $pdostatement->bindValue(":name_projet", $projet->getNameProjet());
        $pdostatement->bindValue(":image_projet", $projet->getImageProjet());
        $pdostatement->bindValue(":resumer", $projet->getResumer());
        $pdostatement->bindValue(":id", $projet->getId());
        return $pdostatement->execute();
    }

    public static function deleteProjet(projet $projet)
    {
        return self::pdo()->exec("DELETE FROM projet WHERE id = " . $projet->getId());  
    }
}