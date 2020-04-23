<?php
class Moto{
    private $modele;
    private $couleur;
    private $cylindre;
    private $serie;
    private $marque;
    private $disponibilite="stock";
    private $nombre;
    private $prix;


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
    function getdisponibilite(){
        return $this->disponibilite;
    }
    function getnombre(){
        return $this->nombre;
    }

    function getprix(){
        return $this->prix;
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
        function setdisponibilite($disponibl){
            $this->disponibilite = $disponibl;
        }
        function setnombre($nb){
            $this->nombre =$nb;
        }

        function setprix($nouveauprix){
            $this->prix = $nouveauprix;
            }

    function __construct($donnee=array()){
        $this->setmodele($donnee["modele"]);
        $this->setcouleur($donnee["couleur"]);
        $this->setcylindre($donnee["cylindre"]);
        $this->setserie($donnee["serie"]);
        $this->set($donnee["marque"]);
        $this->setdisponibilite($donnee["disponibilite"]);
        $this->setnombre($donnee["nombre"]);
        $this->setprix($donnee["prix"]);
    }
    
}

?>

