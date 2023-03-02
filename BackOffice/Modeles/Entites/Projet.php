<?php
namespace Modeles\Entites;
class Projet {
    private $id;
    private $name_projet;
    private $image_projet;
    private $resumer;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getNameProjet()
    {
        return $this->name_projet;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setNameProjet($name_projet)
    {
        $this->name_projet = $name_projet;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getImageProjet()
    {
        return $this->image_projet;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setImageProjet($image_projet)
    {
        $this->image_projet = $image_projet;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResumer()
    {
        return $this->resumer;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResumer($resumer)
    {
        $this->resumer = $resumer;

        return $this;
    }
}