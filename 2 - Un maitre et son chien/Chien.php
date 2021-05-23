<?php

class Chien {
  // Attributs
  private $name;
  private $size;

  // Méthodes 
  // Le constructeur initialise les attributs de l'instance de la classe 'Chien'
  public function __construct($name, $size) {
    $this->rename($name);
    $this->grow($size);
  }

  // Getters
  public function getName() {
    return $this->name;
  }

  public function getSize() {
    return $this->size;
  }

  // Setters
  public function rename($name) {
    if(is_string($name)) {
      $this->name = $name;
    }
  }

  public function grow($size) {
    if($size > $this->size) {
      $this->size = $size;
    }
  }

  // Affiche les caractéristiques du chien 
  public function display() {
    echo "{$this->name} mesure {$this->size} cm<br>";
  }
}

?>