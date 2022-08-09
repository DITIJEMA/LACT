<?php
  if(isset($_REQUEST['id']) and isset($_REQUEST['editar'])){
    $producto->id=$_REQUEST['id'];
    $resultado=$producto->read_by_id();
    $prod=$resultado[0];
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="#" method="get" novalidate>
  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $prod->id ?>">
      <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" value="<?php echo $prod->id ?>" readonly><br>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Stock</label>
        <input type="number" class="form-control" id="validationCustom02" name="stock" placeholder="stock" value="<?php echo $prod->stock ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Imagen</label>
        <input type="file" class="form-control" id="validationCustom02" name="imagen" placeholder="Imagen" value="<?php echo $prod->imagen ?>"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Tipo</label>
      <select class="custom-select" name="tipo" id="validationCustom02"  placeholder="tipo" value="" value="<?php echo $prod->tipo ?>" required>
                <option selected disabled value="">Elige una Opcion</option>
              <option></option>
              <option></option>
              <option></option>
               <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              </select>
              <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Cantidad</label>
        <input type="number" class="form-control" id="validationCustom02" name="cantidad" placeholder="imagen" value="<?php echo $prod->cantidad ?>"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Estado</label>
        <input type="" class="form-control" id="validationCustom02" name="telefono" placeholder="telefono" value="<?php echo $prod->telefono ?>" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Descripcion</label>
        <input type="Text" class="form-control" id="validationCustom02" name="descripcion" placeholder="descripcion" value="<?php echo $prod->descripcion ?>"required>
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