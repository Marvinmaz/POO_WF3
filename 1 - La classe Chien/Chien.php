<?php

// Déclaration de la classe Chien dans un fichier Chien.php (attention à la casse !)
class Chien {
  // Attributs
  private $name;
  private $size;

  // Méthodes 
  public function rename ($name) { // On reçoit le nouveau nom en paramètre
    echo "Le chien s'appelle maintenant {$name}."; // On l'affiche
  }

  public function grow ($size) { // On reçoit la nouvelle taille en paramètre
    echo "Le chien mesure maintenant {$size} cm."; // On l'affiche
  }
}

$chien = new Chien(); // Instanciation de la classe Chien - l'objet est stocké dans la variable $chien
$chien->rename("Pluto"); // Appel de la fontion rename() avec le nouveau nom passé en argument
echo "<br>";
$chien->grow(60); // Appel de la fontion grow() avec la nouvelle taille passée en argument

?>