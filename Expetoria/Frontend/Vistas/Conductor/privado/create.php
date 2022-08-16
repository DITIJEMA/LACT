<?php
  include_once "../../../../Backend/modelo/ruta/ruta_model.php";
  include_once "../../../../Backend/modelo/vehiculo/vehiculo_model.php";

  $all_vehicle = new Vehiculo;
  $vehicle = $all_vehicle -> read_available();

  $all_rutes = new Ruta;
  $rute = $all_rutes -> read_all();
?>

<form method="POST" action="../../../../Backend/controlador/conductor/conductor_con.php" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
<link href="../Dashboard/boton.css" rel="stylesheet" /> 
<input type="hidden" value="1" name="opcion">
      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellido" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido_m" placeholder="apellido" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Email</label>
        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="nombre" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">contraseña</label>
        <input type="password" class="form-control" id="validationCustom02" name="contrasena" placeholder="nombre" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Telefono</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono" placeholder="telefono" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Domicilio</label>
        <input type="text" class="form-control" id="validationCustom02" name="direccion" placeholder="domicilio" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Ruta</label>
        <select class="custom-select" name="ruta" id="validationCustom02"  placeholder="tipo" value="" required>
            <option selected disabled value="">Elige una Opcion</option>
            <?php
              foreach($rute as $r){
            ?>
              <option value="<?php echo $r -> id ?>"><?php echo $r -> id ?> - <?php echo $r -> destino ?></option>
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
            <option selected disabled value="">Elige una Opcion</option>
            <?php
              foreach($vehicle as $v){
            ?>
              <option value="<?php echo $v -> id ?>"><?php echo $v -> id ?> - <?php echo $v -> marca ?> <?php echo $v -> modelo ?></option>
            <?php
              }
            ?>
          </select>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Salario</label>
        <input type="number" class="form-control" id="validationCustom02" name="salario" placeholder="salario" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Imagen</label>
        <input type="file" class="form-control" id="validationCustom02" name="foto" placeholder="foto" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" name="boton" class="boton cuatro">Registrar</button>
      </div>

    </form>