<?php
// Définition de la classe finale 'Femme' héritant de la classe abstraite 'Personne'
final class Femme extends Personne { 
    private $epoux; // La classe 'Femme' possède qu'un attribut privé $epoux mais hérite de tous ceux de la classe 'Personne' ($prenom, $nom et $age)

    public function estCelibataire() {
        if($this->epoux == null) { // Si l'attribut $epoux possède une valeur nulle, alors, la femme est célibataire
            return true;
        }
        return false;
    }

    public function getEpoux() { // Renvoie l'époux si il existe, sinon, affiche un message 
        if($this->estCelibataire() === false) {
            return $this->epoux;
        }
        echo "{$this->getPrenom()} {$this->getNom()} n'a pas d'époux";
    }

    public function setEpoux($epoux) {
        $this->epoux = $epoux;
    }

    public function marier(Homme $homme) { // La méthode marier() fait office de double setter puisqu'elle met à jour l'époux de la femme mais aussi l'épouse de l'homme
        $this->setEpoux($homme);
        $homme->setEpouse($this); // Je ne peux pas appeler la méthode marier() issue de la classe 'Homme' au risque d'entrer dans une boucle infinie
    }

    public function afficher() {
        parent::afficher(); // Appelle la méthode afficher() issue de la classe 'Personne'
        if($this->estCelibataire()) {
            echo "Elle est célibataire.<br>";
        } else { // Si la femme est mariée, affiche le prénom et le nom de son époux
            echo "Elle est mariée à {$this->getEpoux()->getPrenom()} {$this->getEpoux()->getNom()}.<br>";
        }
    }
}

?>