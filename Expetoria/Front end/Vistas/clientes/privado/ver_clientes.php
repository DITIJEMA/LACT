<?php 
    require_once "../../../../Backend/modelo/cliente/cliente_model.php";

    $clientes_all = new Cliente();
    $all_clients = $clientes_all -> read_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>HOLA A TODOS</p>
    <?php 
    include_once "./table_client.php"; 
    ?>
</body>
</html>