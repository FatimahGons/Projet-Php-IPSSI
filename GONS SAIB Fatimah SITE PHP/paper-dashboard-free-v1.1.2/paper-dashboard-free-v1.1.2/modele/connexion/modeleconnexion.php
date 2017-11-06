<?php

require_once './modele/modele.php';

/**
 * Classe modeleConnexion.
 */
class modeleconnexion extends modele {

    /**
     * Attribut de la classe.
     */
    private $bdd;
    
    
    /**
     * 
     * Vérifie si l'utilisateur saisi les bonnes données (user et mot de passe) pour se connecter
     */
    public function ifexist($user,$mdp){
        //Connexion à la base de donnée.
        $bdd = $this->getBdd();

        //Préparation de la requête.
        $requete = $bdd->prepare("SELECT USER,MDP FROM profil WHERE USER=? AND MDP=?");
      
        
        //Execution
        $requete->execute(array($user,$mdp));

        $result = $requete->fetch();

        return $result['USER'] == $user && $result['MDP'] == $mdp;
    }
    
    /**
     * 
     * Retourne le prénom correspondant au user entré à la connexion et gardé en variable de session
     */
    public function getPrenom($user) {
        $bdd = $this->getBdd();
        $requete = $bdd->prepare("SELECT PRENOM  FROM PROFIL WHERE user=:user");
        $requete->execute(array(':user'=>$user));
        $result = $requete->fetch();
        return $result['PRENOM'];
       
    }
    
    /**
     * 
     * Retourne l'ID correspondant au user entré à la connexion et gardé en variable de session
     */
    public function getID($user) {
        $bdd = $this->getBdd();
        $requete = $bdd->prepare("SELECT ID  FROM PROFIL WHERE user=:user");
        $requete->execute(array(':user'=>$user));
        $result = $requete->fetch();
        return $result['ID'];
       
    }
    
    /**
     * 
     * Retourne le nom correspondant au user entré à la connexion et gardé en variable de session
     */
    public function getNom($user) {
        $bdd = $this->getBdd();
        $requete = $bdd->prepare("SELECT NOM  FROM profil WHERE user=:user");
        $requete->execute(array(':user'=>$user));
        $result = $requete->fetch();
        return $result['NOM'];     
    } 
}