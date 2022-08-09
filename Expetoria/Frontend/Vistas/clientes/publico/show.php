<?php
  if(isset($_REQUEST['id'])and isset($_REQUEST['delete'])){
    $clientes_all->id=$_REQUEST['id'];
    $resultado=$clientes_all->read_by_id();
    $clie=$resultado[0];
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="/Expetoria/Backend/controlador/cliente/cliente_con.php" method="get" novalidate>
  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $clie->id ?>">
      <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" value="<?php echo $clie->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" value="<?php echo $clie->nombre?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellido" value="<?php echo $clie->apellido_p?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m" placeholder="apellido" value="<?php echo $clie->apellido_m?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Imagen</label>
        <input type="File" class="form-control" id="validationCustom02" name="imagen" placeholder="imagen" value="<?php echo $clie->imagen?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Telefono</label>
        <input type="tel" class="form-control" id="validationCustom02" name="telefono" placeholder="telefono" value="<?php echo $clie->telefono?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Domicilio</label>
        <input type="Text" class="form-control" id="validationCustom02" name="Domicilio" placeholder="domicilio" value="<?php echo $clie->domicilio?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom02" name="contraseña" placeholder="contraseña" value="<?php echo $clie->contraseña?>"  required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Email</label>
        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="email" value="<?php echo $clie->email?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Fecha de creaciom</label>
        <input type="date" class="form-control" id="validationCustom02" name="fecha_creacion" placeholder="fecha" value="<?php echo $clie->fecha?>"  required>
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