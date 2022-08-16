<?php
  if(isset($_REQUEST['id'])and isset($_REQUEST['delete'])){
    $almacenista->id=$_REQUEST['id'];
    $resultado=$almacenista->read_by_id();
    $alm=$resultado[0];
    print_r($clie);
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="../../../Backend/controlador/almacenista/almacenista_con.php" method="POST" novalidate>
<link href="../Dashboard/boton.css" rel="stylesheet" />   
<input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id" value="<?php echo $alm->nombre ?>">

  <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="salario">Salario</label>
        <input type="number" class="form-control" id="validationCustom02" name="salario"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="imagen">Imagen</label>
        <input type="file" class="form-control" id="validationCustom02" name="imagen"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="telefono">Telefono</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="domicilio">Domicilio</label>
        <input type="Text" class="form-control" id="validationCustom02" name="Domicilio"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="email" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom02" name="contraseña" placeholder="contraseña" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>
      <div class="mb-3">
        <button type="submit" name="boton" class="boton cuatro">BORRAR CUENTA</button>
      </div>

    </form>
<?php
  }
  ?>