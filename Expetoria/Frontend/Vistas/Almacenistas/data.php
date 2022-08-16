<?php
  $registros=$almacenista->read_all();
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
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Salario</th>
        <th scope="col">Imagen</th>
        <th scope="col">Telefono</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Email</th>
        <th scope="col">Contraseña</th>
      </tr>
    </thead>

    <tbody>
        <?php
        foreach ($registros as $alm) {
        ?>

    <tbody>
      <tr>
        <td><?php echo $alm->nombre ?></td>
        <td><?php echo $alm->apellido_p ?></td>
        <td><?php echo $alm->apellido_m ?></td>
        <td><?php echo $alm->salario ?></td>
        <td><?php echo $alm->imagen?></td>
        <td><?php echo $alm->telefono ?></td>
        <td><?php echo $alm->domicilio ?></td>
        <td><?php echo $alm->email ?></td>
        <td><?php echo $alm->contraseña ?></td>
        <td><a href="index.php?editar&ID=<?php echo $clie->ID?>">Editar</a></td>
            <td><a href="index.php?borrar&ID=<?php echo $clie->ID ?>">Borrar</a></td>
      </tr>   
      <?php
        }
       ?>
    </tbody>
  </table>