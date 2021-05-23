<?php
// Définition de la classe finale 'Homme' héritant de la classe abstraite 'Personne'
final class Homme extends Personne {
    private $epouse; // La classe 'Homme' possède qu'un attribut privé $epouse mais hérite de tous ceux de la classe 'Personne' ($prenom, $nom et $age)

    public function estCelibataire() {
        if($this->epouse == null) { // Si l'attribut $epouse possède une valeur nulle, alors, l'homme est célibataire
            return true;
        }
        return false;
    }

    public function getEpouse() { // Renvoie l'épouse si elle existe, sinon, affiche un message 
        if($this->estCelibataire() === false) {
            return $this->epouse;
        }
        echo "{$this->getPrenom()} {$this->getNom()} n'a pas d'épouse";
    }

    public function setEpouse($epouse) {
        $this->epouse = $epouse;
    }

    public function marier(Femme $femme) { // La méthode marier() fait office de double setter puisqu'elle met à jour l'époux de la femme mais aussi l'épouse de l'homme
        $this->setEpouse($femme);
        $femme->setEpoux($this); // On ne peut pas appeler la méthode marier() issue de la classe 'Femme' au risque d'entrer dans une boucle infinie
    }

    public function afficher() {
        parent::afficher(); // Appelle la méthode afficher() issue de la classe 'Personne'
        if($this->estCelibataire()) { 
            echo "Il est célibataire.<br>";
        } else { // Si l'homme est marié, affiche le prénom et le nom de son épouse
            echo "Il est marié à {$this->getEpouse()->getPrenom()} {$this->getEpouse()->getNom()}.<br>";
        }
    }
}

?>