<?php
  $registros=$vehiculo->read_all();
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
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Matricula</th>
        <th scope="col">Carga</th>
      </tr>
    </thead>

    <tbody>
        <?php
        foreach ($registros as $veh) {
        ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $veh->id?></th>
        <td><?php echo $veh->Marca?></td>
        <td><?php echo $veh->Modelo?></td>
        <td><?php echo $veh->matricula?></td>
        <td><?php echo $veh->carga?></td>
      </tr>   
      <?php
        }
       ?>
    </tbody>
  </table>