<?php
  if(isset($_REQUEST['id']) and isset($_REQUEST['edit'])){
    $clientes_all->id=$_REQUEST['id'];
    $resultado=$clientes_all->read_by_id();
    $clie=$resultado[0];
    print_r($resultado);
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="../../../../Backend/controlador/cliente/cliente_con.php" method="POST" novalidate>
  <input type="hidden" name="opcion" value="2">
  <div class="form-row">
      <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" placeholder="ID" value="<?php echo $clie->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>


      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" value="<?php echo $clie->nombre?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>
      </div>

      <div class="form-row">
      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellidop" value="<?php echo $clie->apellido_p?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m" placeholder="apellidom" value="<?php echo $clie->apellido_m?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>
      </div>

      <div class="form-row">
      <div class="mb-3">
        <label for="apellido1">Imagen</label>
        <img src="../../../../Backend/img/clientes/<?php echo $clie->imagen ?>" alt="<?php echo $clie->imagen ?>" height="100px" width="150px">
        <input type="file" class="form-control" id="validationCustom02" name="foto" placeholder="imagen" value="<?php echo $clie->imagen?>" >
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Telefono</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono" placeholder="telefono" value="<?php echo $clie->telefono?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>
      </div>

      <div class="form-row">
      <div class="mb-3">
        <label for="apellido1">Domicilio</label>
        <input type="Text" class="form-control" id="validationCustom02" name="domicilio" placeholder="domicilio" value="<?php echo $clie->direccion?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom02" name="contraseña" placeholder="contraseña" value="<?php echo $clie->contrasena?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>
      </div>

  <div class="form-row">
      <div class="mb-3">
        <label for="apellido1">Email</label>
        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="email" value="<?php echo $clie->email?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Fecha de creaciom</label>
        <input type="date" class="form-control" id="validationCustom02" name="fecha_creacion" placeholder="fecha" value="<?php echo $clie->creacion_cuenta?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>
  </div>

      <div class="mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Registrar</button>
      </div>

    </form>
<?php
  }
  ?>