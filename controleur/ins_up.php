<?php
$manageur=new Mmanager(); 
$moto=new Moto();
 if(isset($_GET["serie"])){
     $moto=$manageur-> get($_GET["serie"]);
     echo 'moto';
}
if(isset($_POST["marque"]) AND isset($_POST["prix"]) AND isset($_POST["modele"]) AND isset($_POST["couleur"]) AND isset($_POST["cylindre"])
<<<<<<< HEAD
AND isset($_POST["serie"])){
    $_POST["disponibilite"]='stock';
    $_POST["nombre"]='0';
=======
AND isset($_POST["numero_de_serie"])){
    $_POST["disponibilite"]="stock";
    $_POST["nombre"]="";
>>>>>>> master
    $moto=new Moto($_POST);
    if(isset($_GET["serie"])){
     $manageur->misejour($moto);
    }
    $manageur->enregistrer($moto);

<<<<<<< HEAD
header("location:index.php?page=liste");
=======
   header("location:index.php?page=liste");
>>>>>>> master
    
}

$contenu="../vues/ins_up.vue.php";
require("../vues/app.vue.php");
?>