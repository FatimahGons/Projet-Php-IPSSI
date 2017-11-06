<?php

/**
 * Classe Controleur.
 */
class Controleur {

    /**
     * Controleur
     */
    function login() {
        session_start();
        ob_start();
        require './vue/login/vuelogin.php';
        if (isset($_POST["Connexion"])) {

            //Modèle
            require'./modele/connexion/modeleconnexion.php';

            //Récupération des données
            $user = $_POST['user'];
            $mdp = $_POST['mdp'];

            $modeleCo = new modeleconnexion();

            if ($modeleCo->ifexist($user, $mdp)) {
                //Initialise les variables de session
                $_SESSION['user'] = $user;
                $_SESSION['prenom'] = $modeleCo->getPrenom($user);
                $_SESSION['nom'] = $modeleCo->getNom($user);
                $_SESSION['id'] = $modeleCo->getID($user);
                header('location:profil.php');
                ob_end_clean();
                //ob_end_flush();
            } else {
                echo "<script> window.alert('Pseudo ou mot de passe incorrect'); </script>";
            }
        }
    }

    function index() {
        session_start();
        //Chargement de la vue.
        //Instanciation d'un nouveau modèle

        require './vue/accueil/vueaccueil.php';
    }
    
    function table() {
        session_start();
        //Chargement de la vue.
        //Instanciation d'un nouveau modèle
        
         ob_start();
        require './modele/utilisateurs/modeleutilisateurs.php';
        $modeleUsers = new modeleUtilisateurs();
        $result = $modeleUsers->getUtilisateurs();

        require './vue/table/vuetable.php';
    }

   

    function addUsers() {
        session_start();
        require './modele/utilisateurs/modeleutilisateurs.php';
        $modeleUsers = new modeleUtilisateurs();
        //$result = $modeleAct->afficheAnimations();
        //$result2 = $modeleAct->afficheEncadrant();
        //$result3 = $modeleAct->afficheEtat();
        $resultat = "";

        if (isset($_POST["envoyer"])) {

            //Récupération des données
            $user = $_POST['user'];
            $mdp = $_POST['mdp'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
          


            if ($modeleUsers->ifexist($user, $nom, $prenom)) {
                $resultat = '<div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Impossible - </b> Cet utilisateur existe déjà </span>
                                </div>';
            } else {
                $modeleUsers->insertUsers($user, $mdp, $nom, $prenom);
                //header('Location:activites.php');
                $resultat = '<div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Succès - </b> L\'utilisateur a bien été ajouté !</span>
                                </div>';
            }
        }

        require './vue/table/vueaddusers.php';
    }

    function modifyusers() {
        session_start();
        require './modele/utilisateurs/modeleutilisateurs.php';
        $modeleusers = new modeleUtilisateurs();
        $id = $_GET['id'];
       
        $result = $modeleusers->getUsersByParam($id);
        $resultat = "";

        if (isset($_POST["envoyer"])) {

            $id = $_GET['id'];
            $user = $_POST['user'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
           

            $modeleusers->modifyUsers($user, $nom, $prenom, $id);
          
            header("Location:table.php");
            $resultat = '<div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Succès - </b> Votre modification a bien été effectuée</span>
                                </div>';
        }

        require './vue/table/vuemodifyusers.php';
    }

    function profil() {
        session_start();
        $prenom = $_SESSION['prenom'];
        require'./modele/profil/modeleProfil.php';
        $modeleProfil = new modeleProfil();
        $result = $modeleProfil->getProfil($prenom);
        //var_dump($result);
        //var_dump($_SESSION['nomLoisant']);
        require './vue/profil/vueprofil.php';
    }

    function deconnexion() {
        require './modele/deconnexion/modeleDeconnexion.php';
        $modeleDeconnexion = new modeleDeconnexion();
        $modeleDeconnexion->deconnexion();
    }


    function deleteUsers() {
        session_start();
        require './modele/utilisateurs/modeleutilisateurs.php';
        $modeleUsers = new modeleUtilisateurs();
        $id = $_GET['id'];
        $resultat = "";
        
        $modeleUsers->deleteUsers($id);
        $resultat = '<div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Succès - </b> L\'utilisateur a bien été supprimé</span>
                                </div>';

        

        require './vue/table/vuedeleteusers.php';
    }

}
