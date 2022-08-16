<table>
    <thead class="table table-dark">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Telefono</td>
            <td>Dirección</td>
            <td>Salario</td>
            <td>Contratación</td>
            <td>Correo electronico</td>
            <td>Activo</td>
            <td>Editar</td>
            <td>Borrar</td>
            <td><a href="./see_almacenista.php?create"><button>+AGREGAR</button></a></td>
        </tr>
    </thead>

    <tbody class="table table-hover">
        <?php
            foreach($all_almacenistas as $al){
        ?>

            <td><?php echo $al -> id ?></td>
            <td><?php echo $al -> nombre ?></td>
            <td><?php echo $al -> apellido_p ?></td>
            <td><?php echo $al -> apellido_m ?></td>
            <td><?php echo $al -> telefono ?></td>
            <td><?php echo $al -> direccion ?></td>
            <td><?php echo $al -> salario ?></td>
            <td><?php echo $al -> fecha_contratacion ?></td>
            <td><?php echo $al -> email ?></td>
            <td><?php echo $al -> activo ?></td>
            <td><a href="">Editar</a></td>
            <td><a href="">Borrar</a></td>

        <?php
            }
        ?>
    </tbody>
</table>