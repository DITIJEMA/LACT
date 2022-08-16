<?php
  if(isset($_REQUEST['id']) and isset($_REQUEST['borrar'])){
    $vehiculo->id=$_REQUEST['id'];
    $resultado=$vehiculo->read_by_id();
    $veh=$resultado[0];
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="#" method="get" novalidate>
<link href="../Dashboard/boton.css" rel="stylesheet" />    
<input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $veh->id ?>">
  <div class="mb-3">
  <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" value="<?php echo $veh->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Marca</label>
        <input type="text" class="form-control" id="validationCustom02" name="marca" placeholder="marca" value="<?php echo $veh->marca ?>"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Modelo</label>
        <input type="text" class="form-control" id="validationCustom02" name="modelo" placeholder="modelo" value="<?php echo $veh->modelo ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Matricula</label>
        <input type="text" class="form-control" id="validationCustom02" name="matricula" placeholder="matricula" value="<?php echo $veh->matricula ?>"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Carga</label>
        <input type="text" class="form-control" id="validationCustom02" name="carga" placeholder="carga" value="<?php echo $veh->carga ?>"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" name="boton" class="boton cuatro">Borrar</button>
      </div>

    </form>

  <?php
  }
  ?>