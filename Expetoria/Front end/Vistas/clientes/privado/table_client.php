<table>
    <thead class="table table-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Creacion cuenta</th>
            <th>Imagen</th>
            <th>Tipo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Activo</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>

    <tbody class="table table-hover">
        <?php
            foreach($all_clients as $all){
        ?>

        <tr>
            <th><?php echo $all->id ?></th>
            <th><?php echo $all->nombre ?></th>
            <th><?php echo $all->apellido_p ?></th>
            <th><?php echo $all->apellido_m ?></th>
            <th><?php echo $all->creacion_cuenta ?></th>
            <th><?php echo $all->imagen ?></th>
            <th><?php echo $all->tipo ?></th>
            <th><?php echo $all->telefono ?></th>
            <th><?php echo $all->direccion ?></th>
            <th><?php echo $all->activo ?></th>
        </tr>

        <?php
            }
        ?>
    </tbody>
</table>