<?php

// Chargeur automatique pour inclure toutes les classes instanciées
function chargerClasse($classe) {
    require $classe . ".php";
}
// On ajoute la fonction chargerClasse() à la pile d'autoloads
spl_autoload_register('chargerClasse');

$chris = new Maitre("Chevalier", "Chris", 28); // On créé un objet Maitre

$pluto = new Chien("Pluto", 60); // On créé un objet Chien
$chris->display(); // On affiche le maitre
$pluto->display(); // On affiche le chien
$chris->setDog($pluto); // Le maitre adopte le chien
$chris->display(); // On affiche le maitre

?>