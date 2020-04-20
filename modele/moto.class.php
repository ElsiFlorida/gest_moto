<?php
class Moto{
    private $modele;
    private $couleur;
    private $cylindre;
    private $serie;
    private $marque;

    function getmodele(){
        return $this->modele;
    }

    function getcouleur(){
        return $this->couleur;
    }

    function getcylindre(){
        return $this->cylindre;
    }

    function getserie(){
        return $this->serie;
    }

    function getmarque(){
        return $this->marque;
    }

    function setmodele($nouveaumodele){
        $this->modele = $nouveaumodele;
        }
    
        function setcouleur($nouveaucouleur){
            $this->couleur = $nouveaucouleur;
        }
    
        function setcylindre($nouveaucylindre){
            $this->cylindre = $nouveaucylindre;
        }
    
        function setserie($nouveauserie){
            $this->serie = $nouveauserie;
        }
    
        function setmarque($nouveaumarque){
            $this->marque = $nouveaumarque;
        }

    function __construct($donnee=array()){

        $this->setmodele($donnee["modele"]);
        $this->setcouleur($donnee["couleur"]);
        $this->setcylindre($donnee["cylindre"]);
        $this->setserie($donnee["serie"]);
        $this->set($donnee["marque"]);
    }
    
}

?>

