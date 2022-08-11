<?php
    include_once "../../modelo/producto/producto_mod.php";

    print_r($_REQUEST);
    echo '<br></br>';
    print_r($_FILES);


    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];

        switch($opcion){
            case 1: //create
                $producto = new Producto;
                $producto -> stock = $_REQUEST['stock'];
                $producto -> precio = $_REQUEST['precio'];
                $producto -> imagen = $_FILES['foto']['name'];
                $producto -> cantidad = $_REQUEST['cantidad'];
                $producto -> tipo = $_REQUEST['tipo'];
                $producto -> descripcion = $_REQUEST['descripcion'];

                $result = $producto -> create();

                if($result == 1){
                    header('Location: ../../../Front end/Vistas/productos/privado/ver-producto.php?create=false');
                 } else{
                     include_once "./fileproducto.php";
                     header('Location: ../../../Front end/Vistas/productos/privado/ver-producto.php?create=true');
                 }
                break;
            case 2: //update
                $producto = new Producto;
                $producto -> stock = $_REQUEST['stock'];
                $producto -> precio = $_REQUEST['precio'];
                $producto -> imagen = $_FILES['foto']['name'];
                $producto -> cantidad = $_REQUEST['cantidad'];
                $producto -> tipo = $_REQUEST['tipo'];
                $producto -> descripcion = $_REQUEST['descripcion'];

                $result = $producto -> update();

                if($result == 1){
                    header('Location: ../../../Front end/Vistas/productos/privado/see-producto.php?update=false');
                 } else{
                     include_once "./fileproducto.php";
                     header('Location: ../../../Front end/Vistas/productos/privado/see-producto.php?update=true');
                 }
                break;
            case 3: //delete
                $producto = new Producto;
                $producto -> id = $_REQUEST['id'];

                $result = $producto -> delete();

                if($result == 1){
                    header('Location: ../../../Front end/Vistas/productos/privado/see-producto.php?delete=false');
                 } else{
                     header('Location: ../../../Front end/Vistas/productos/privado/see-producto.php?delete=true');
                 }
                break;
        }
    }
?>