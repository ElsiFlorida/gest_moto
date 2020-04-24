<?php
$manageur=new Mmanager(); 

 if(isset($_GET["serie"])){
     $moto=$manageur-> get($_GET["serie"]);
}

if(isset($_POST["marque"]) AND isset($_POST["prix"]) AND isset($_POST["modele"]) AND isset($_POST["couleur"]) AND isset($_POST["cylindre"])
AND isset($_POST["numero_de_serie"])){
    $_POST["disponibilite"]="stock";
    $_POST["nombre"]="";
    $moto=new Moto($_POST);
    if(isset($_GET["serie"])){
     $manageur->misejour($moto);
    }
    $manageur->enregistrer($moto);

   header("location:index.php?page=liste");
    
}

$contenu="../vues/ins_up.vue.php";
require("../vues/app.vue.php");
?>