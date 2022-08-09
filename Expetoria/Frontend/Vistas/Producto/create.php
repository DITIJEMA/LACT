<form method="get" action="#" 
class="row g-3 needs-validation" novalidate>
<input type="hidden" value="1" name="opcion">
      <div class="mb-3">
      <label for="nombre">ID</label>
        <input type="number" class="form-control" id="validationCustom02" name="ID" placeholder="ID" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Stock</label>
        <input type="number" class="form-control" id="validationCustom02" name="stock" placeholder="stock" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Imagen</label>
        <input type="file" class="form-control" id="validationCustom02" name="imagen" placeholder="Imagen" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Tipo</label>
      <select class="custom-select" name="tipo" id="validationCustom02"  placeholder="tipo" value="" required>
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
        <input type="number" class="form-control" id="validationCustom02" name="cantidad" placeholder="imagen" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="apellido1">Estado</label>
        <input type="" class="form-control" id="validationCustom02" name="telefono" placeholder="telefono" required>
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
        <button type="submit" class=" btn btn-primary w-100 fs-5">Registrar</button>
      </div>

    </form>