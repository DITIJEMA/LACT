<table>
    <thead class="table table-dark">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Telefono</td>
            <td>Direccion</td>
            <td>Salario</td>
            <td>Fecha contratación</td>
            <td>Correo electronico</td>
            <td>Estado</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Matricula</td>
            <td>Destino</td>
            <td>Editar</td>
            <td>Borrar</td>
            <td><a href="./see.conductor.php?create"><button>+Agregar</button></a></td>
        </tr>
    </thead>

    <tbody class="table table-hover">
        <?php
            foreach($all as $conductores){
        ?>
        <tr>
            <td><?php echo $conductores -> id ?></td>
            <td><?php echo $conductores -> nombre ?></td>
            <td><?php echo $conductores -> apellido_p ?></td>
            <td><?php echo $conductores -> apellido_m ?></td>
            <td><?php echo $conductores -> telefono ?></td>
            <td><?php echo $conductores -> direccion ?></td>
            <td><?php echo $conductores -> salario ?></td>
            <td><?php echo $conductores -> fecha_contratacion ?></td>
            <td><?php echo $conductores -> email ?></td>
            <td><?php echo $conductores -> activo ?></td>
            <td><?php echo $conductores -> marca ?></td>
            <td><?php echo $conductores -> modelo ?></td>
            <td><?php echo $conductores -> matricula ?></td>
            <td><?php echo $conductores -> destino ?></td>
            <td><a href="./see.conductor.php?edit&id=<?php echo $conductores -> id ?>">Editar</a></td>
            <td><a href="./see.conductor.php?delete&id=<?php echo $conductores -> id ?>">Eliminar</a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
    