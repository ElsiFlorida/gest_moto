<?php
$motos=new Mmanager();
$motoliste=$motos->getMarque();
if(isset($_GET["serie"])){
    $motos->supprimer($_GET["serie"]);
}
if(isset($_GET["marque"])){
    $motoliste=$motos->getMarque($_GET["marque"]);
}
$contenu="../vues/liste.vue.php";
require("../vues/app.vue.php");
?>