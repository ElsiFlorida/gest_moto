<?php
class Admin{
   private $base;
   function __construct(){
    $this->base=$GLOBALS["base"];
   }
    function isAdmin($id,$password){
        $aut=$this->base->prepare("SELECT * FROM admin WHERE identifiant=:idt AND mot_de_passe=:pass");
        $aut->execute(array(
            "idt"=>$id,
            "pass"=>$password
        ));
        $adm=$aut->fetch();
        if(count($adm)!=0){
             return $adm;
        }
        else{ 
         return false;
        }
    }
}

?>