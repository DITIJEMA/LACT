<form method="POST" action="../../../Backend/controlador/vehiculo/vehiculo_con.php" class="row g-3 needs-validation" novalidate>
<link href="../Dashboard/boton.css" rel="stylesheet" />  
<input type="hidden" value="1" name="opcion">

      <div class="mb-3">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="validationCustom02" name="marca" placeholder="marca" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="validationCustom02" name="modelo" placeholder="modelo" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="matricula">Matricula</label>
        <input type="text" class="form-control" id="validationCustom02" name="matricula" placeholder="matricula" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <label for="carga">Carga</label>
        <input type="number" class="form-control" id="validationCustom02" name="carga" placeholder="carga" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="mb-3">
        <button type="submit" name="boton" class="boton cuatro">Registrar</button>
      </div>

    </form>