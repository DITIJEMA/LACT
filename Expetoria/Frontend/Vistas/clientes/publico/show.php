<?php
  if(isset($_REQUEST['id'])and isset($_REQUEST['delete'])){
    $clientes_all->id=$_REQUEST['id'];
    $resultado=$clientes_all->read_by_id();
    $clie=$resultado[0];
    print_r($clie);
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="../../../../Backend/controlador/cliente/cliente_con.php" method="POST" novalidate>
  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id" value="<?php echo $clie->id ?>">
      <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" value="<?php echo $clie->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Nombre</label>
        <input type="Text" class="form-control" id="validationCustom02" name="nombre" placeholder="nombre" value="<?php echo $clie->nombre?>" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Paterno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_p" placeholder="apellido" value="<?php echo $clie->apellido_p?>" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Apellido Materno</label>
        <input type="Text" class="form-control" id="validationCustom02" name="apellido_m" placeholder="apellido" value="<?php echo $clie->apellido_m?>" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Correo electronico</label>
        <input type="Text" class="form-control" id="validationCustom02" name="email" placeholder="apellido" value="<?php echo $clie->email?>" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" class=" btn btn-danger w-100 fs-5">BORRAR CUENTA</button>
      </div>

    </form>
<?php
  }
  ?>