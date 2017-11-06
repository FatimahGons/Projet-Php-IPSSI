<?php

require_once './modele/modele.php';

/**
 * Classe modeleDeconnexion.
 */
class modeleDeconnexion extends modele {
    
    /**
     * Détruit toutes les variables de sessions et fait une redirection vers la page d'accueil
     */
    public function deconnexion(){
        session_start();
        unset($_SESSION['user']);
        unset($_SESSION['prenom']);
        unset($_SESSION['nom']);
        session_destroy();
        
        header('Location:index.php');
    }


}