<?php
include('../stylesheet.php');

function auto($class){
require_once("../modele/".$class.".class.php");
echo $class;
}

spl_autoload_register("auto");

$db=new Db();
$base=$db->getBase();

if(isset($_GET["page"])){
    $controleur=$_GET["page"].".php";
     if(file_exists($controleur)){
         include($controleur);
     }
}

?>