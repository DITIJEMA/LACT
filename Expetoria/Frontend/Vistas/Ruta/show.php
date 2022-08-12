<?php
  if(isset($_REQUEST['id']) and isset($_REQUEST['borrar'])){
    $ruta->id=$_REQUEST['id'];
    $resultado=$_ruta->read_by_id();
    $rut=$resultado[0];
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="#" method="get" novalidate>
  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id" value="<?php echo $rut->id ?>">
  <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" value="<?php echo $rut->id ?>" readonly><br>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Destino</label>
        <input type="text" class="form-control" id="validationCustom02" name="destino" placeholder="destino" value="<?php echo $rut->destino ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Registrar</button>
      </div>

    </form>
    <?php
  }
  ?>