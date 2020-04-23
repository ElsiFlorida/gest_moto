<?php
session_start();

if(isset($_SESSION['nom_prenom']))
{
  $nom=$_SESSION['nom_prenom'];
}else{
  $nom="Non connecter";
}
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>GESTION DES MOTO</title>
    
  </head>
  <body>
  <div class="contenair">
    <section class=".mainrow row h-100">
      <aside class="as col-md-1 bg-info p-0">
        <ul class="p-3">
          <li class="mt-5 li "><a class=" menu-item fa fa-plus d-flex flex-column justify-content-center" href=""></a></li>
          <li class="mt-5 li "><a class=" menu-item fa fa-motorcycle d-flex flex-column justify-content-center" href=""></a></li>
          <li class="mt-5 li "><a class=" menu-item fa fa-money d-flex flex-column justify-content-center" href=""></a></li>
          <li class="mt-5 li "><a class=" menu-item fa fa-sign-out d-flex flex-column justify-content-center" href=""></a></li>
        </ul>
      </aside>
      <section class=" sect col-md-11 p-0">
        <header class="d-flex justify-content-end p-3 bg-danger">
          <h4><?php echo $nom; ?></h4>
        </header>
        <div class="">
          <?php include($contenu);?>
        </di>
      </section>
    </section>
  </div>
  </body>
</html>