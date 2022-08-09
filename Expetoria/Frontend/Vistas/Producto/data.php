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
        <th scope="col">Stock</th>
        <th scope="col">Imagen</th>
        <th scope="col">Tipo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Estado</th>
        <th scope="col">Descripcion</th>
      </tr>
    </thead>

    <tbody>
        <?php
        foreach ($registros as $prod) {
        ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $prod->id?></th>
        <td><?php echo $prod->stock?></td>
        <td><?php echo $prod->imagen ?></td>
        <td><?php echo $prod->tipo ?></td>
        <td><?php echo $prod->cantidad ?></td>
        <td><?php echo $prod->estado?></td>
        <td><?php echo $prod->descripcion ?></td>
        <td><a href="index.php?editar&ID=<?php echo $prod->ID?>">Editar</a></td>
            <td><a href="index.php?borrar&ID=<?php echo $prod->ID ?>">Borrar</a></td>
      </tr>   
      <?php
        }
       ?>
    </tbody>
  </table>