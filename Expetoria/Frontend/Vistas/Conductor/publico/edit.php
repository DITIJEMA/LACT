<?php
    include_once "../../../../Backend/modelo/ruta/ruta_model.php";
    include_once "../../../../Backend/modelo/vehiculo/vehiculo_model.php";

    $all_conductores -> id = $_REQUEST['id'];
    $resultado=$all_conductores->read_by_id();
    $cond=$resultado[0];

    $rutas = new Ruta;
    $vehiculo = new Vehiculo;

    $all_rutas = $rutas -> read_all();
    $all_vehiculos = $vehiculo -> read_available();
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="../../../../Backend/controlador/conductor/conductor_con.php" method="POST" novalidate>
<link href="../Dashboard/boton.css" rel="stylesheet" />   
<input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $cond->id ?>">
  <input type="hidden" name="id_v" value="<?php echo $cond -> id_vehiculo ?>">

      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" value="<?php echo $cond->nombre ?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellido" value="<?php echo $cond->apellido_p ?>"  required>
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
        <input type="Text" class="form-control" id="validationCustom02" name="direccion" placeholder="domicilio" value="<?php echo $cond->direccion ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Ruta</label>
        <select class="custom-select" name="ruta" id="validationCustom02"  placeholder="tipo" value="" required>
            <option disabled value="">Elige una Opcion</option>
            <?php
              foreach($all_rutas as $r){
            ?>
              <option value="<?php echo $r -> id ?>" <?php echo ($r -> id == $cond -> id_ruta?'selected':'') ?>><?php echo $r -> id ?> - <?php echo $r -> destino ?></option>
            <?php
              }
            ?>
          </select>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Vehiculo</label>
        <select class="custom-select" name="vehiculo" id="validationCustom02"  placeholder="tipo" value="" required>
            <option disabled value="">Elige una Opcion</option>
            <?php
              foreach($all_vehiculos as $v){
            ?>
              <option value="<?php echo $v -> id ?>" <?php echo ($v -> id == $cond -> id_vehiculo?'selected':'') ?>><?php echo $v -> id ?> - <?php echo $v -> marca ?> <?php echo $v -> modelo ?></option>
            <?php
              }
            ?>
          </select>
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
        <button type="submit" name="boton" class="boton cuatro">Registrar</button>
      </div>
    </form>
<?php
  ?>