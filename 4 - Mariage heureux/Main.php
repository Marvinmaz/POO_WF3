<?php

// Chargeur automatique pour inclure toutes les classes instanciées
function chargerClasses($classe) {
    require "{$classe}.php";
}
// On ajoute la fonction chargerClasse() à la pile d'autoloads
spl_autoload_register("chargerClasses");

$femme = new Femme("Meghan", "Markle", 37); // On créé un objet de type 'Femme'
$homme= new Homme("Harry", "de Sussex", 34); // On créé un objet de type 'Homme'

$femme->afficher(); // Affiche les informations de l'objet $femme
$homme->afficher(); // Affiche les informations de l'objet $homme

$homme->marier($femme); // Marie les objets $homme et $femme entre eux

$femme->afficher(); // Affiche les informations de l'objet $femme
$homme->afficher(); // Affiche les informations de l'objet $homme

?>