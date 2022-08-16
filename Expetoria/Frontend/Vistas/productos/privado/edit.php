<?php
  if(isset($_REQUEST['id']) and isset($_REQUEST['edit'])){
    $all_products->id=$_REQUEST['id'];
    $resultado=$all_products->read_by_id();
    $prod=$resultado[0];
    print_r($prod);
?>
<form class="p-4 needs-validation" enctype="multipart/form-data" action="../../../../Backend/controlador/producto/producto_con.php" method="POST" novalidate>
  <input type="hidden" name="opcion" value="2">
      <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="id" placeholder="ID" value="<?php echo $prod->id ?>" readonly><br>
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
        <input type="file" class="form-control" id="validationCustom02" name="foto" placeholder="Imagen" value="<?php echo $prod->imagen ?>"required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Tipo</label>
      <select class="custom-select" name="tipo" id="validationCustom02"  placeholder="tipo" value="<?php echo $prod->tipo ?>" required>
        <option disabled value="">Elige una Opcion</option>
        <option value="2" <?php echo $prod->tipo == '2'?'selected':''; ?>>LECHE</option>
        <option value="1" <?php echo $prod->tipo == '1'?'selected':''; ?>>QUESO</option>
        <option value="3" <?php echo $prod->tipo == '3'?'selected':''; ?>>YOGURT</option>
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
        <label for="apellido1">Precio</label>
        <input type="number" class="form-control" id="validationCustom02" name="precio" placeholder="precio" value="<?php echo $prod->precio ?>" required>
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
        <button type="submit" class=" btn btn-primary w-100 fs-5">EDITAR</button>
      </div>

    </form>
    <?php
  }
  ?>