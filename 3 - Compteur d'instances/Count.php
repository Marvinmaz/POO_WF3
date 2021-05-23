<?php

class Count {
  // Initialisation du compteur à 0
  private static $count = 0;

  public function __construct() {
    // L'attribut statique $count s'incrémente à chaque construction d'objet Count
    self::$count++;
  }

  public static function getCount() { // Méthode statique renvoyant la valeur actuelle du compteur
    return self::$count;
  }
}

// On instancie 3 fois la classe 'Count'
$object1 = new Count;
$object2 = new Count;
$object3 = new Count;

// Cet appel devrait donc afficher '3'
echo Count::getCount();