<?php
if(isset($_POST["vnom"]) AND isset($_POST["vprenom"]) AND isset($_POST["vsomme"]) AND isset($_POST["vtelephone"]) AND isset($_POST["vserie"])){
    $sold=new Vente();
    $sold->vendre($_POST);

    header("location:index.php?page=liste");
}

 $contenu="../vues/vente.vue.php";
 require("../vues/app.vue.php");
?>