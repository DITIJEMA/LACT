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
                $active = $all -> activo;
                if($active == 'A'){
        ?>

            <tr>
                <th class="table-success"><?php echo $all->id ?></th>
                <th class="table-success"><?php echo $all->nombre ?></th>
                <th class="table-success"><?php echo $all->apellido_p ?></th>
                <th class="table-success"><?php echo $all->apellido_m ?></th>
                <th class="table-success"><?php echo $all->creacion_cuenta ?></th>
                <th class="table-success"><?php echo $all->imagen ?></th>
                <th class="table-success"><?php echo $all->tipo ?></th>
                <th class="table-success"><?php echo $all->telefono ?></th>
                <th class="table-success"><?php echo $all->direccion ?></th>
                <th class="table-success"><?php echo $all->activo ?></th>
            </tr>

        <?php
                } else{
        ?>
            <tr>
                <th class="table-danger"><?php echo $all->id ?></th>
                <th class="table-danger"><?php echo $all->nombre ?></th>
                <th class="table-danger"><?php echo $all->apellido_p ?></th>
                <th class="table-danger"><?php echo $all->apellido_m ?></th>
                <th class="table-danger"><?php echo $all->creacion_cuenta ?></th>
                <th class="table-danger"><?php echo $all->imagen ?></th>
                <th class="table-danger"><?php echo $all->tipo ?></th>
                <th class="table-danger"><?php echo $all->telefono ?></th>
                <th class="table-danger"><?php echo $all->direccion ?></th>
                <th class="table-danger"><?php echo $all->activo ?></th>
            </tr>

        <?php
                }
            }    
        ?>
    </tbody>
</table>