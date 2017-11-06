<?php

require_once './modele/modele.php';

/**
 * Classe modeleDeconnexion.
 */
class modeleProfil extends modele {
    
    /**
     * Récupère le profil de l'utilisateur grâce à son prénom
     */
    public function getProfil($prenom) {
        $bdd = $this->getBdd();
        $req = "SELECT * FROM `profil` WHERE `PRENOM`= '$prenom'";
        $requete = $bdd->prepare($req);
        //var_dump($req);
        $requete->execute();
        return $requete->fetchAll();
    }


}