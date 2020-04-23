<?php
class Admin{
   private $base;
   function __construct(){
    $base=$GLOBALS["base"];
   }
    function isAdmin($id,$password){
        $aut=$this->base->prepare("SELECT * FROM admin WHERE identifiant=:idt AND mot_de_passe=:pass");
        $admin=$aut->execute(array(
            "idt"=>$id,
            "pass"=>$password
        ));
        if(count($admin->fetch()!=0)){
            return $admin->fetch();
        }
        else{ 
            return false;
        }
    
    }
}

?>