<?php
$admin=new Admin();
if(isset($_POST["tel"]) AND isset($_POST["pass"])){
    $verif=$admin->isAdmin($_POST["tel"],$_POST["pass"]);
if($verif!=false){

    session_start();
    $_SESSION["nom"]=$verif["nom"]." ".$verif["prenom"];
     header("location:index.php?page=accueil");
}
else{
    header("location:index.php?page=connexion");
}
 }
 include("../vues/connexion.vue.php");

?>