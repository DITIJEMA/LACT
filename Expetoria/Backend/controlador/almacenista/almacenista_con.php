<?php
    include_once "../../modelo/almacenista/almacenista_model.php";

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];

        switch($opcion){
            case 1: //*crear
                $dia = date("d");
                $mes = date("m");
                $año = date("Y");
                $date = "$dia/$mes/$año";

                $almacenista = new Almacenista();
                $almacenista->nombre = $_REQUEST['nombre'];
                $almacenista->apellido_p=$_REQUEST['apellidop'];
                $almacenista->apellido_m=$_REQUEST['apellidom'];
                $almacenista->salario=$_REQUEST['salario'];
                $almacenista->imagen=$_FILES['foto']['name'];
                $almacenista->telefono=$_REQUEST['telefono'];
                $almacenista->domicilio=$_REQUEST['domicilio'];
                $almacenista->email=$_REQUEST['email'];
                $almacenista->contraseña=$_REQUEST['contraseña'];
                $almacenista->fecha_creacion=$date;
                $almacenista->tipo='ALMACENISTA';

                $result = $almacenista -> create();

                if($result == 1){
                    header('Location: ../../../Front end/Vistas/clientes/publico/RC.php?send=false');
                 } else{
                     include_once "./filealmacenista.php";
                     header('Location: ../../../Front end/Vistas/clientes/publico/RC.php?send=true');
                 }
                break;
            case 2: //*actualizar 
                $dia = date("d");
                $mes = date("m");
                $año = date("Y");
                $date = "$dia/$mes/$año";

                $almacenista = new Almacenista();
                $almacenista->id = $_REQUEST['id'];
                $almacenista->nombre = $_REQUEST['nombre'];
                $almacenista->apellido_p=$_REQUEST['apellidop'];
                $almacenista->apellido_m=$_REQUEST['apellidom'];
                $almacenista->salario=$_REQUEST['salario'];
                $almacenista->imagen=$_FILES['foto']['name'];
                $almacenista->telefono=$_REQUEST['telefono'];
                $almacenista->domicilio=$_REQUEST['domicilio'];
                $almacenista->email=$_REQUEST['email'];
                $almacenista->contraseña=$_REQUEST['contraseña'];
                $almacenista->fecha_creacion=$date;
                $almacenista->tipo='ALMACENISTA';

                $result = $almacenista -> update();

                if($result == 1){
                    header('Location: ../../../Front end/Vistas/clientes/publico/RC.php?send=false');
                 } else{
                     include_once "./filealmacenista.php";
                     header('Location: ../../../Front end/Vistas/clientes/publico/RC.php?send=true');
                 }
                break;
            case 3://*borrar
                $almacenista = new Almacenista();
                $almacenista->id = $_REQUEST['id'];

                $result = $almacenista -> delete();

                if($result == 1){
                    header('Location: ../../../Front end/Vistas/clientes/publico/RC.php?send=false');
                 } else{
                     include_once "./filealmacenista.php";
                     header('Location: ../../../Front end/Vistas/clientes/publico/RC.php?send=true');
                 }
                break;
        }
    }
?>