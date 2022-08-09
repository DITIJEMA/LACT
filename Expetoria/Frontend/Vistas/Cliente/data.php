<?php
  $registros=$cliente->read_all();
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
        <th scope="col">Imagen</th>
        <th scope="col">Telefono</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha</th>
      </tr>
    </thead>

    <tbody>
        <?php
        foreach ($registros as $clie) {
        ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $clie->ID?></th>
        <td><?php echo $clie->nombre ?></td>
        <td><?php echo $clie->apellido_p ?></td>
        <td><?php echo $clie->apellido_m ?></td>
        <td><?php echo $clie->apellido_m ?></td>
        <td><?php echo $clie->imagen?></td>
        <td><?php echo $clie->telefono ?></td>
        <td><?php echo $clie->domicilio ?></td>
        <td><?php echo $clie->contraseña ?></td>
        <td><?php echo $clie->email ?></td>
        <td><?php echo $clie->fecha_creacion ?></td>
        <td><a href="index.php?editar&ID=<?php echo $clie->ID?>">Editar</a></td>
            <td><a href="index.php?borrar&ID=<?php echo $clie->ID ?>">Borrar</a></td>
      </tr>   
      <?php
        }
       ?>
    </tbody>
  </table>