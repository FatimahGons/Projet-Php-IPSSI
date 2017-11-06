<?php

abstract class modele {

    // Objet PDO d'accès à la BD
    private $bdd;

    // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
    protected function getBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO('mysql:host=localhost;dbname=ipssitest;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }

}
