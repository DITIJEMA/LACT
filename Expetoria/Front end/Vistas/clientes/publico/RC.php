<?php
  require_once "../../../../Backend/modelo/cliente/cliente_model.php";

  $client = new Cliente();
  $all_clients = $client -> read_all(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.88.1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>LACT</title>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">LACT</a>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="../../../Inicio.html">
                <span data-feather="home"></span>
                INICIO
              </a>
            </li>
          </ul>
        </div>
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="../../../Login.html">
                <span data-feather="home"></span>
                INICIO DE SESION
              </a>
            </li>
          </ul>
        </div>
      </nav>


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-1">
      <div class="needs-validation" action="./Registro Cliente.php" method="get" novalidate>
      <div class="form-row">
      <div class="col-md-3-mb-3">   
      <h1 class="h2">REGISTRO DEL CLIENTE</h1>   
    </div> 
      </div> 

      <?php
        if(isset($_REQUEST['send'])){
          $send = $_REQUEST['send'];
          switch($send){
            case 'true':
      ?>
        <div class="alert alert-primary" role="alert">
          Cliente registrado exitosamente.
        </div>
      <?php
          break;
          case 'false':
      ?>
        <div class="alert alert-danger" role="alert">
          Cliente no registrado exitosamente.
        </div>
      <?php
          }
        }
      ?>
     
    <form class="needs-validation" action="../../../../Backend/controlador/cliente/cliente_con.php" enctype="multipart/form-data" method="POST" novalidate>
      <input type="hidden" name="opcion" value="1"> 
      <!-- //! DECLARAR LOS NAME DE LOS INPUT CON LETRAS MINUSCULAS
      //? Agregar las columnas que faltan en en este formulario, para poder conectar todo -->

      <div class="form-row">
      <div class="col-md-6 mb-3">
                <label for="validationCustom02">NOMBRE</label>
                <input type="text" class="form-control" name="nombre" id="validationCustom02"  placeholder="NOMBRE" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">APELLIDO PATERNO</label>
                <input type="text" class="form-control" name="apellidop" id="validationCustom02"  placeholder="PATERNO" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
      </div>
      
      <div class="form-row">
      <div class="col-md-6 mb-3">
              <label for="validationCustom02">APELLIDO MATERNO</label>
              <input type="text" class="form-control" name="apellidom" id="validationCustom02" placeholder="MATERNO" value="" required />
              <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">TELEFONO</label>
                <input type="tel" class="form-control" name="telefono" id="validationCustom02"  placeholder="TELEFONO" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            </div>
           

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">DOMICILIO</label>
                <input type="text" class="form-control" name="domicilio" id="validationCustom02"  placeholder="DOMICILIO" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">CONTRASEÑA</label>
                <input type="password" class="form-control" name="contraseña" id="validationCustom02"  placeholder="CONTRASEÑA" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">CORREO ELECTRONICO</label>
              <input type="email" class="form-control" name="email" id="validationCustom02" placeholder="CORREO" value="" required />
              <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            </div>

            <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">FOTO</label>
              <input type="file" class="form-control" name="foto" id="validationCustom02" placeholder="CORREO" value="" required />
              <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                <label class="form-check-label" for="invalidCheck">
                  Aceptar terminos y condiciones de nuestro EULA de como manejamos los datos de los clientes.
                </label>
                <div class="invalid-feedback">
                  Usted debe aceptar los terminos y condiciones de nuestro EULA.
                </div>
              </div>
           
            

              <button class="btn btn-primary" type="submit">Registrar</button>
          </form>

          <script>
            
            (function() {
              "use strict";
              window.addEventListener(
                "load",
                function() {

                  var forms = document.getElementsByClassName("needs-validation");

                  var validation = Array.prototype.filter.call(
                    forms,
                    function(form) {
                      form.addEventListener(
                        "submit",
                        function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add("was-validated");
                        },
                        false
                      );
                    }
                  );
                },
                false
              );
            })();
          </script>
        </div>
      </main>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>'
        );
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="dashboard.js"></script>
</body>

</html>