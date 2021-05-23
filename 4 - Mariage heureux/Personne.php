<?php
// Définition de la classe asbtraite 'Personne'
abstract class Personne {
    private $prenom;
    private $nom;
    private $age;

    public function __construct($prenom, $nom, $age) {
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAge($age);
    }

    final public function vieillir() {
        $this->setAge($this->age++); // Incrémente la valeur de l'attribut $age
    }

    // Affiche les caractéristiques d'une personne (prénom, nom et âge)
    public function afficher() {
        echo "{$this->prenom} {$this->nom} a {$this->age} ans. ";
    }

    // Définition de la méthode abstraite estCelibataire() à implémenter dans les classes enfants de la classe 'Personne'
    abstract public function estCelibataire();

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}

?>