<?php
$ID="";
$Lugar="";
$Fecha="";
$Hora="";
if(isset($_GET['ID'])){
  $ID=$_GET['ID'];
}
if(isset($_GET['Lugar'])){
  $Lugar=$_GET['Lugar'];
}
if(isset($_GET['Fecha'])){
  $Fecha=$_GET['Fecha'];
}
if(isset($_GET['Hora'])){
  $Hora=$_GET['Hora'];
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
              <a class="nav-link" href="./RC.php">
                <span data-feather="file"></span>
                HACER PEDIDO<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./RFH.php">
                <span data-feather="shopping-cart"></span>
                REGISTRAR HORA Y LUGAR DE LLEGADA
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../../../Login.html">
                <span data-feather="home"></span>
                INICIO
              </a>
          </ul>
        </div>
      </nav>


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-1">
      <div class="needs-validation" action="./TF/Cita Registro.php" method="get" novalidate>
      <div class="form-row">
      <div class="col-md-3-mb-3">   
      <h1 class="h2">FECHA Y HORA DE LLEGADA</h1>   
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
                <label for="validationCustom02">Lugar</label>
                <input type="text" class="form-control" name="Lugar" id="validationCustom02"  placeholder="LUGAR DE LLEGADA DEL PRODUCTO" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
      </div>
          
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Fecha</label>
                <input type="Date" class="form-control" name="Fecha" id="validationCustom02"  placeholder="FECHA DE LLEGADA DEL PRODUCTO" value="" required />
                <div class="valid-feedback">Regitro correcto</div>
              <div class="invalid-feedback">
                Hay un error revice por favor            
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">Hora</label>
                <input type="time" class="form-control" name="Hora" id="validationCustom02"  placeholder="HORA DE LLEGADA DEL PRODUCTO" value="" required />
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
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              "use strict";
              window.addEventListener(
                "load",
                function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName("needs-validation");
                  // Loop over them and prevent submission
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
            <th scope="col">ID</th>
              <th scope="col">Lugar</th>
              <th scope="col">Fecha</th>
              <th scope="col">Hora</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $ID?></td>
              <td><?php echo $Lugar?></td>
              <td><?php echo $Fecha?></td>
              <td><?php echo $Hora?></td>
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