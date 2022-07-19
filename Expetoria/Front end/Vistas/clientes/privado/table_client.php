<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Creacion cuenta</th>
            <th>Imagen de perfil</th>
            <th>Activo</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apeliido materno</th>
            <th>Telefono</th>
            <th>direccion</th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach($all_clients as $all){
        ?>

        <tr>
            <th><?php echo $all->id ?></th>
            <th><?php echo $all->email ?></th>
            <th><?php echo $all->contrasena ?></th>
            <th><?php echo $all->creacion_cuenta ?></th>
            <th><?php echo $all->imagen ?></th>
            <th><?php echo $all->activo ?></th>
            <th><?php echo $all->tipo ?></th>
            <th><?php echo $all->nombre ?></th>
            <th><?php echo $all->apellido_p ?></th>
            <th><?php echo $all->apellido_m ?></th>
            <th><?php echo $all->telefono ?></th>
            <th><?php echo $all->direccion ?></th>
        </tr>

        <?php
            }
        ?>
    </tbody>
</table>