<?php
    include_once "../../../../Backend/modelo/almacenista/almacenista_model.php";

    $all = new Almacenista;
    $all_almacenistas = $all -> read_all();
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
  <link rel="stylesheet" href="../../../Vendor/CSS/txt.css">
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
              Inicio
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../../Login.html">
              <span data-feather="home"></span>
              Inicio de sesion
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../../Vistas//Almacenistas/privado/see_almacenista.php">
              <span data-feather="home"></span>
              Almacenista
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../clientes//privado/ver_clientes.php">
              <span data-feather="home"></span>
              Cliente
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../Conductor/privado/see.conductor.php">
              <span data-feather="home"></span>
              Conductor
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../productos/privado/ver_productos.php">
              <span data-feather="home"></span>
            Productos
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../Ruta/see_ruta.php">
              <span data-feather="home"></span>
              Ruta
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../../Vehiculo/see-vehiculo.php">
              <span data-feather="home"></span>
              Vehiculo
            </a>
          </li>
        </ul>
      </div>
    </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-1">
      <div class="needs-validation" action="#" method="get" novalidate>
      <div class="form-row">
      <div class="col-md-3-mb-3">   
      <h1 class="h2">REGISTRO DE ALMACENISTAS</h1>   
    </div> 
      </div> 
        
      <?php
        if(isset($_REQUEST['create'])){
          include "./create.php";
        } else if(isset($_REQUEST['id']) && isset($_REQUEST['edit'])){
          include "../publico/edit.php";
        } else if(isset($_REQUEST['id']) && isset($_REQUEST['delete'])){
          include "../publico/show.php";
        } else{
          include "./table_almacenista.php";
        }
      ?>

    <hr>

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