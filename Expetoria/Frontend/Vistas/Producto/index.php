<?php

include '../../../Backend/modelo/producto/producto_mod.php';

$producto = new Producto();
$registros = $producto->read_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../../../../Expetoria/Frontend/Vistas/Dashboar/head.php";
    ?>
    <title>Producto</title>
</head>

<body>

    <?php
    include ".../../../../Expetoria/Frontend/Vistas/Dashboar/header.php";
    ?>
    <div class="container-fluid">
        <div class="row">

            <?php
            include "../../../../Expetoria/Frontend/Vistas/Dashboar/navbar.php";
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <?php
                if (isset($_GET['estatus'])) {
                    $estatus = $_GET['estatus']; ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?php echo $estatus ?>!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }
                ?>

                <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
                    <div class="text-center mb-4" id="titulo-formulario">
                        <div><img src="" alt="" class="img-fluid ps-5"></div>
                        <h2>Producto</h2>
                        <p class="fs-5">COMPLETA EL FORMULARIO</p>
                    </div>

                    <?php
                    include "../../../../Expetoria/Frontend/Vistas/Producto/create.php";
                    ?>
                    </div>
                    <?php
                    include "../../../../Expetoria/Frontend/Vistas/Producto/data.php";
                    ?>
            </main>
        </div>
    </div>

    <?php
    include "../../../../Expetoria/Frontend/Vistas/Dashboar/footer.php";
    ?>
</body>

</html>