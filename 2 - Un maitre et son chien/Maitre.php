<?php

class Maitre {
  // Attributs
  private $lastname;
  private $firstname;
  private $age;
  private $dog;

  // Méthodes 
  // Le constructeur initialise les attributs de l'instance de la classe 'Maitre'
  public function __construct($lastname, $firstname, $age) {
    $this->setLastname($lastname);
    $this->setFirstname($firstname);
    $this->setAge($age);
    // Un maître n'a pas de chien à sa création 
  }

  // Getters
  public function getLastname() {
    return $this->lastname;
  }

  public function getFirstname() {
    return $this->firstname;
  }

  public function getAge() {
    return $this->age;
  }

  public function getDog() {
    return $this->dog;
  }

  // Setters
  public function setFirstname($firstname) {
    $this->firstname = $firstname;
  }

  public function setLastname($lastname) {
    $this->lastname = $lastname;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function setDog($dog) {
    $this->dog = $dog;
  }

  public function renameAll($firstname, $lastname) {
    $this->setFirstname($firstname);
    $this->setLastname($lastname);
  }

  // Affiche les caractéristiques du maitre et, si il en a un, du chien 
  public function display() {
    echo "{$this->firstname} {$this->lastname} a {$this->age} ans ";
    if(!empty($this->dog)) {
         echo "et un chien : ";
         $this->dog->display(); // Appelle la méthode display() issue de la classe 'Chien'
    } else {
        echo "et pas de chien...<br>";
    }
  }
}

?>