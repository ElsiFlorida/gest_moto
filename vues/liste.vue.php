<di>
<table>
    <thead>
       <th>Modele </th>
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
          <td><?php echo $moto->getModel(); ?></td>
          <td><?php echo $moto->getCouleur(); ?></td>
          <td><?php echo $moto->getCylindre(); ?></td>
          <td><?php echo $moto->getdisponibilite() ?></td>
          <td><?php echo $moto->getSerie(); ?></td>
          <td><a href="index.php?page=ins_up&serie=<?php $moto->getSerie(); ?>" class="btn btn-success">Update</a> <a href="index.php?page=liste&serie=<?php $moto->getSerie(); ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>