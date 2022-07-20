<?php
$ID_Cliente="";
$Producto="";
$Costo="";
$Cantidad="";

if(isset($_GET['ID'])){
  $ID_Cliente=$_GET['ID'];
}
if(isset($_GET['PRODUCTO'])){
  $Producto=$_GET['PRODUCTO'];
}
if(isset($_GET['COSTO'])){
  $Costo=$_GET['COSTO'];
}
if(isset($_GET['CANTIDAD'])){
  $Cantidad=$_GET['CANTIDAD'];
}
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
              <a class="nav-link" href="../Back end/RC.php">
                <span data-feather="file"></span>
                HACER PEDIDO<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Back end/RFH.php">
                <span data-feather="shopping-cart"></span>
                REGISTRAR HORA Y LUGAR DE LLEGADA
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Front end/LACT.html">
                <span data-feather="shopping-cart"></span>
                INICIO
              </a>
            </li>
           
          </ul>
        </div>
      </nav>


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-1">
      <div class="needs-validation" action="./TF/Problema Registro" method="get" novalidate>
      <div class="form-row">
      <div class="col-md-3-mb-3">   
      <h1 class="h2">HACER PEDIDO</h1>   
    </div> 
      </div> 
     
    <form class="needs-validation" novalidate>
      <div class="form-row">
      <div class="col-md-6 mb-3">
                <label for="validationCustom02">ID</label>
                <input type="number" class="form-control" name="ID" id="validationCustom02"  placeholder="ID DEL CLIENTE" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">PRODUCTO</label>
                <select class="custom-select" name="PRODUCTO" id="validationCustom02"  placeholder="ELIGA UN PRODUCTO" value="" required />
                <option selected disabled value="">ELIGA EL PRODUCTO</option>
              <option>LECHE 1T</option>
              <option>CRAMA ACIDA 1T</option>
              <option>CREMA ASIDA 500ML</option>
               <option>CREMA ASIDA 250ML</option>
              </select>
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
      </div>

      <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">CANTIDAD</label>
                <input type="NUMBER" class="form-control" name="CANTIDAD" id="validationCustom02"  placeholder="NO HAGA NADA AQUI" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            </div>
          
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">COSTO</label>
                <input type="NUMBER" class="form-control" name="COSTO" id="validationCustom02"  placeholder="NO HAGA NADA AQUI" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            </div>

            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
           
            

              <button class="btn btn-primary" type="submit">Registrar</button>
              <button class="btn btn-primary" type="reset">Borrar</button>
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
        
        <table class="table table-dark">
          <thead>
            <tr>
            <th scope="col">$ID_CLIENTE</th>
              <th scope="col">PRODUCTOS</th>
              <th scope="col">CANTIDAD</th>
              <th scope="col">COSTO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $ID_Cliente?></td>
              <td><?php echo $Producto?></td>
              <td><?php echo $Cantidad?></td>
              <td><?php echo $Costo?></td>
            </tr>
            <tr>
            </tr>
          </tbody>
        </table>
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