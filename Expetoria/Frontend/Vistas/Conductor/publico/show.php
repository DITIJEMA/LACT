<?php
  if(isset($_REQUEST['id'])and isset($_REQUEST['borrar'])){
    $conductor->id=$_REQUEST['id'];
    $resultado=$conductor->read_by_id();
    $cond=$resultado[0];

?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="#" method="get" novalidate>
  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $cond->id ?>">
  <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" value="<?php echo $cond->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" value="<?php echo $cond->nombre ?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellido" value="<?php echo $cond->apellidos_p ?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m" placeholder="apellido" value="<?php echo $cond->apellido_m ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Telefono</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono" placeholder="telefono" value="<?php echo $cond->telefono ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Domicilio</label>
        <input type="Text" class="form-control" id="validationCustom02" name="domicilio" placeholder="domicilio" value="<?php echo $cond->domicilio ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Ruta</label>
        <input type="Text" class="form-control" id="validationCustom02" name="ruta" placeholder="ruta" value="<?php echo $cond->ruta ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Vehiculo</label>
        <input type="text" class="form-control" id="validationCustom02" name="vehiculo" placeholder="vehiculo" value="<?php echo $cond->vehiculo ?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Salario</label>
        <input type="text" class="form-control" id="validationCustom02" name="salario" placeholder="salario" value="<?php echo $cond->salario ?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Fecha de contratacion</label>
        <input type="date" class="form-control" id="validationCustom02" name="fecha_con" placeholder="fecha_con" value="<?php echo $cond->fecha_con ?>"  required>
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