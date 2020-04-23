<?php
//include('../stylesheet.php');
?>
<div class="d-flex h-100">
  <section class="col-md-6">
    <form class="d-flex flex-column justify-content-between align-items-center form m-5 pt-5 pb-5" action="ins_up.php" method="post">
      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Marque" name="marque" value="<?php //echo $moto->getmarque()?>">
      </div>

      <div class="form-group w-100">
        <input type="password" class="form-control" placeholder="Model" name="model" value="<?php //echo $moto->getmodele()?>">
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Prix" name="prix" value="<?php //echo $moto->getPrix()?>">
      </div>

      <div class="form-group w-100">
        <input type="color" class="form-control" placeholder="Couleur" name="couleur" value="<?php //echo $moto->getcouleur()?>">
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Cylindre" name="cylindre" value="<?php //echo $moto->getcylindre()?>">
      </div>

      <div class="form-group w-100">
        <input type="text" class="form-control" placeholder="Numero de seri" name="seri" value="<?php //echo $moto->getserie()?>">
      </div>

      <div class="form-group w-100">
        <input class="form-control w-25" type="submit" value="Save">
      </div>
    </form>
  </section>
  <section class="col-md-6 bg-info">
      <h1 style="text-align:center">Ajout D'une Nouvelle Moto</h1>
  </section>
</div>