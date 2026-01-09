<?php

class Voiture {

    private $kilometre;
    private $phare;    
    private $essence;  
    private $signal;    
    private $capacite;  

    // CONSTRUCTEUR
    public function __construct($kilometre = 50, $essence = 50, $phare = "off", $capacite = 60) {
        $this->kilometre = $kilometre;
        $this->essence = $essence;
        $this->phare = $phare;
        $this->capacite = $capacite;
        $this->signal = "vert";
    }

    //TABLEAU DE BORD
    public function tableauDeBord() {
        echo "Kilomètres : " . $this->kilometre . " km<br>";
        echo "Essence : " . $this->essence . " L<br>";
        echo "Phares : " . $this->phare . "<br>";
        echo "Voyant essence : " . $this->signal . "<br>";
    }

    //VOYANT ESSENCE
    public function verifierEssence() {
        if ($this->essence <= 5) {
            $this->signal = "rouge";
        } else {
            $this->signal = "vert";
        }
    }

    //PHARE
    public function allumerPhares() {
        $this->phare = "on";
    }

    public function eteindrePhares() {
        $this->phare = "off";
    }

    //ESSENCE

    public function faireLePlein() {
        $this->essence = $this->capacite;
        $this->verifierEssence();
    }

    //ROULER

    public function rouler($km) {

        if ($km <= 0) {
            return;
        }

        if ($this->essence <= 0) {
            $this->signal = "rouge";
            return;
        }

        $essenceNecessaire = $km / 5;

        if ($essenceNecessaire > $this->essence) {
            $kmPossible = $this->essence * 5;
            $this->kilometre = $this->kilometre + $kmPossible;
            $this->essence = 0;
            $this->signal = "rouge";
        } else {
            $this->kilometre = $this->kilometre + $km;
            $this->essence = $this->essence - $essenceNecessaire;
        }

        $this->verifierEssence();
    }
}
