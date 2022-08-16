<?php
  if(isset($_REQUEST['id'])and isset($_REQUEST['delete'])){
    $all_conductores -> id = $_REQUEST['id'];
    $resultado=$all_conductores->read_by_id();
    $cond=$resultado[0]; 
    print_r($cond);

?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="../../../../Backend/controlador/conductor/conductor_con.php" method="get" novalidate>
  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id" value="<?php echo $cond->id ?>">
  <input type="hidden" name="id_v" value="<?php echo $cond->id_vehiculo ?>">
  <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" placeholder="ID" value="<?php echo $cond->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" value="<?php echo $cond->nombre ?>"  readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellido" value="<?php echo $cond->apellido_p ?>"  readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m" placeholder="apellido" value="<?php echo $cond->apellido_m ?>" readonly>
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