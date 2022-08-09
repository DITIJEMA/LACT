<?php
  $registros=$producto->read_all();
      if (isset($_GET['estatus'])) {
         $estatus = $_GET['estatus']; 
         ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?php echo $estatus ?>!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                <?php
                }
                ?>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Telefono</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Ruta</th>
        <th scope="col">Vehiculo</th>
        <th scope="col">Salario</th>
        <th scope="col">Fecha_contraccion</th>
      </tr>
    </thead>

    <tbody>
        <?php
        foreach ($registros as $cond) {
        ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $cond->ID?></th>
        <td><?php echo $cond->nombre ?></td>
        <td><?php echo $cond->apellido_p ?></td>
        <td><?php echo $cond->apellido_m ?></td>
        <td><?php echo $cond->apellido_m ?></td>
        <td><?php echo $cond->telefono ?></td>
        <td><?php echo $cond->direccion ?></td>
        <td><?php echo $cond->id_ruta ?></td>
        <td><?php echo $cond->id_vehiculo ?></td>
        <td><?php echo $cond->salario ?></td>
        <td><?php echo $cond->fecha_con ?></td>
        <td><a href="index.php?editar&ID=<?php echo $cond->ID?>">Editar</a></td>
            <td><a href="index.php?borrar&ID=<?php echo $cond->ID ?>">Borrar</a></td>
      </tr>   
      <?php
        }
       ?>
    </tbody>
  </table>