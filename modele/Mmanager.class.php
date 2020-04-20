<?php
include_once("moto.class.php")
class Manager{
    private $base;
    private $motoclass;
    function __construct($moto){
        $this->motoclass=$moto; 
    }

    function getMarque($marque=""){
        $motoliste=[];
        $get=$base->query("SELECT *,COUNT(marque) as nombre FROM moto");
        if ($marque!=""){
            $get=$base->prepare("SELECT * ,COUNT(marque) as nombre FROM moto WHERE marque=:mark");
            $get->execute(array("mark"=>$marque));
        }
        while ($don=$get->fetch()) {
            $moto=new Moto($don);
            $motoliste[]=$moto;
        }
        return $motoliste;
    }
    
?>