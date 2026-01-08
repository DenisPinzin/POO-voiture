<?php

class Voiture {

    private $couleur;
    private $nbPortes;
    private $kilometre;
    private $essence;

    //Définir une fonction
    public function rouler(){
        echo 'la voiture '.$this->couleur.' roule <br>';
    }

    //Va définir des valeurs par défaut dans les parenthese de l'autre page
    public function __construct($couleur='blanche', $nbPortes=3, $kilometre=50, $essence=30) {
        $this-> couleur = $couleur;
        $this-> nbPortes = $nbPortes;
        $this-> kilometre = $kilometre;
        $this-> essence = $essence;
    }

    //GETTER
    public function getCouleur(){
        return  $this->couleur;
    }

    public function getNbPortes(){
        return  $this->nbPortes;
    }

    public function getKilometre(){
        return  $this->kilometre;
    }

    public function getEssence(){
        return  $this->essence;
    }

    //SETTER
        public function setCouleur($couleur){
         $this->couleur = $couleur;
    }
    
}

