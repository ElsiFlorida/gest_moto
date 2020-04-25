<?php
include_once("moto.class.php");
class Mmanager{
    private $base;
    function __construct(){
        $this->base=$GLOBALS["base"];
    }

    function getMarque($marque=""){
        $motoliste=[];
        $get=$this->base->query("SELECT * FROM moto");
        if ($marque!=""){
            $get=$this->base->prepare("SELECT * ,COUNT(marque) as nombre FROM moto WHERE marque=:mark");
           $get->execute(array("mark"=>$marque));
        }
<<<<<<< HEAD
        while ($don=$get->fetch()) {
            $moto=new Moto($don);
            $motoliste[]=$moto;
=======
        $don= $get->fetchAll();
        foreach($don as $key=>$tom) {
            $moto=new Moto($tom);
            $motoliste[$key]=$moto;
>>>>>>> master
        }
        return $motoliste;
    }
    function getNombre($marque=""){
        $nb=$this->base->query("SELECT COUNT(marque) as nombre  FROM moto");
        if ($marque!=""){
            $nb=$this->base->prepare("SELECT COUNT(marque) as nombre FROM moto WHERE marque=:mark");
            $nb->execute(array("mark"=>$marque));
        }
        $nomb=$nb->fetch();
        return $nomb["nombre"];
    }

    function get($serie){
        $tomo=$this->base->prepare("SELECT * FROM moto WHERE serie=:serie");
       $tomo->execute(array(
            "serie"=>$serie
        ));
        return new Moto($tomo->fetch()); 
    }

<<<<<<< HEAD
 function enregistrer($motoregister){
    $inserer=$this->base->prepare("INSERT INTO moto (modele,couleur,cylindre,disponibilite,numero_de_serie,marque,prix) VALUES(:modeleM,:couleurM,:cylindreM,:disponibleM,:serieM,:marqueM,:prixM)");
=======
function enregistrer($motoregister){
    print_r($motoregister);
    $inserer=$this->base->prepare("INSERT INTO moto(modele,couleur,cylindre,disponibilite,numero_de_serie,marque,prix) VALUES(:modeleM,:couleurM,:cylindreM,:disponibleM,:serieM,:marqueM,:prixM)");
>>>>>>> master
    $inserer->execute(array(

        "modeleM"=>$motoregister->getmodele(),
        "couleurM"=>$motoregister->getcouleur(),
        "cylindreM"=>$motoregister->getcylindre(),
        "disponibleM"=>$motoregister->getdisponibilite(),
        "serieM"=>$motoregister->getserie(),
        "marqueM"=>$motoregister->getmarque(),
        "prixM"=>$motoregister->getprix()
    ));
}

function misejour($motojour){
    $modi=$this->base->prepare("UPDATE moto SET modele=:modeleM,couleur=:couleurM,cylindre=:cylindreM,disponible=disponibleM,marque=:marqueM,prix=:prixM WHERE serie=:serieM");
    $modi->execute(array(

        "modeleM"=>$motojour->getmodele(),
        "couleurM"=>$motojour->getcouleur(),
        "cylindreM"=>$motojour->getcylindre(),
        "disponibleM"=>$motojour->getdisponibilite(),
        "serieM"=>$motojour->getserie(),
        "marqueM"=>$motojour->getmarque(),
        "prixM"=>$motojour->getprix()
    ));
}

function supprimer($motodelete){
    $supr=$this->base->prepare("DELETE FROM moto WHERE numero_de_serie=:serieM");
    $supr->execute(array(
        "serieM"=>$motodelete
    ));
}
<<<<<<< HEAD

}    
=======
} 
>>>>>>> master
?>