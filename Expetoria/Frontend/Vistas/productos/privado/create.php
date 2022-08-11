<form method="POST" action="../../../../Backend//controlador/producto/producto_con.php" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
<input type="hidden" value="1" name="opcion">

      <div class="mb-3">
        <label for="apellido1">Stock</label>
        <input type="number" class="form-control" id="validationCustom02" name="stock" placeholder="stock" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Precio</label>
        <input type="number" class="form-control" id="validationCustom02" name="precio" placeholder="precio" required>
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
        <label for="apellido1">Tipo</label>
      <select class="custom-select" name="tipo" id="validationCustom02"  placeholder="tipo" value="" required>
                <option selected disabled value="">Elige una Opcion</option>
              <option value="2">LECHE</option>
              <option value="1">QUESO</option>
              <option value="3">YOGURT</option>
              </select>
              <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Cantidad</label>
        <input type="number" class="form-control" id="validationCustom02" name="cantidad" placeholder="cantidad" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Descripcion</label>
        <input type="Text" class="form-control" id="validationCustom02" name="descripcion" placeholder="descripcion" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Crear</button>
      </div>

    </form>