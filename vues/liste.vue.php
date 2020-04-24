<di>
<table class="table table-bordered table-striped">
    <thead>
       <th>Modele </th>
       <th>Marque </th>
       <th>Couleur</th>
       <th>Cylindre</th>
       <th>Disponible</th>
       <th>Serie</th>
       <th>Options</th>
    </thead>
    <tbody>
        <?php
        foreach ($motoliste as $moto) {
        ?>
        <tr>
          <td><?php echo $moto->getmodele(); ?></td>
          <td><?php echo $moto->getmarque(); ?></td>
          <td><?php echo $moto->getcouleur(); ?></td>
          <td><?php echo $moto->getcylindre(); ?></td>
          <td><?php echo $moto->getdisponibilite() ?></td>
          <td><?php echo $moto->getserie(); ?></td>
          <td>
           <a href="index.php?page=ins_up&serie=<?php echo $moto->getserie(); ?>" class="btn btn-success">Update</a>
           <a href="index.php?page=vente&serie=<?php echo $moto->getserie(); ?>" class="btn btn-info">Vendre</a>
           <a href="index.php?page=liste&serie=<?php echo $moto->getserie(); ?>" class="btn btn-danger">Delete</a>
           
           </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>