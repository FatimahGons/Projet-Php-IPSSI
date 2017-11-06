<?php

require_once './modele/modele.php';

/**
 * Classe modeleConnexion.
 */
class modeleUtilisateurs extends modele {

    /**
     * Attribut de la classe.
     */
    private $bdd;

    /**
     * 
     * Retourne toutes les données de l'utilisateur 
     */
    public function getUtilisateurs() {
        $bdd = $this->getBdd();
        $requete = $bdd->prepare("SELECT * FROM profil");
        $requete->execute();
        return $requete->fetchAll();
    }

    /**
     * 
     * Ajoute un nouvel utilisateur dans la base de données
     */
    public function insertUsers($user, $mdp, $nom, $prenom) {
        //Connexion à la base de données.
        $bdd = $this->getBdd();

        //Préparation de la requête.
        $requete = $bdd->prepare("INSERT INTO `profil`(`USER`, `MDP`, `NOM`, `PRENOM`) VALUES (?,?,?,?)");

        //Execution.
        $requete->execute(array($user, $mdp, $nom, $prenom));
    }
    
    /**
     * 
     * Récupère les données de l'utilisateur grâce à son ID
     */
    public function getUsersByParam($id) {
        $bdd = $this->getBdd();
        $req = "SELECT * FROM PROFIL WHERE ID = '$id' ";
        $requete = $bdd->prepare($req);
        $requete->execute();
        return $requete->fetchAll();
    }
    
    /**
     * 
     * Modifie les informations d'un utilisateur
     */
    public function modifyUsers($user, $nom, $prenom, $id) {
        $bdd = $this->getBdd();
        $req = "UPDATE PROFIL SET USER = '$user', NOM = '$nom', PRENOM = '$prenom' WHERE ID = '$id' ";
        $requete = $bdd->prepare($req);
        //var_dump($req);
        $requete->execute();
    }

    /**
     * 
     * Regarde si un utilisateur existe déjà
     */
    public function ifexist($user, $nom, $prenom) {
        //Connexion à la base de donnée.
        $bdd = $this->getBdd();

        //Préparation de la requête.
        $requete = $bdd->prepare("SELECT * FROM PROFIL WHERE NOM=? AND PRENOM=? AND USER=?");


        //Execution
        $requete->execute(array($nom, $prenom, $user));

        $result = $requete->fetch();

        return $result['NOM'] == $nom && $result['PRENOM'] == $prenom && $result['USER'] == $user;
    }
   
    /**
     * 
     * Supprime un utilisateur
     */
    public function deleteUsers($id) {
        $bdd = $this->getBdd();
        $req = "DELETE FROM `PROFIL` WHERE `ID`= '$id' ";
        $requete = $bdd->prepare($req);
        //var_dump($req);
        $requete->execute();
    }
   
}
