<table>
    <thead class="table table-dark">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Imagen</td>
            <td>Tipo</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Stock</td>
            <td>Estado</td>
            <td>Editar</td>
            <td>Borrar</td>
            <td><button type="button" class="btn btn-primary"><a href="./ver_productos.php?create" class="text-button">+ AGREGAR</a></button></td>
        </tr>
    </thead>

    <tbody class="table table-hover">
        <?php
            foreach($all as $todo){
        ?>
        <tr>
            <th><?php echo $todo->id ?></th>
            <th><?php echo $todo->descripcion ?></th>
            <th><img src="../../../../Backend/img/productos/<?php echo $todo->imagen ?>" alt="<?php echo $todo->imagen ?>" height="100px" width="150px"></th>
            <th><?php echo $todo->nombre  ?></th>
            <th>$<?php echo $todo->precio ?></th>
            <th><?php echo $todo->cantidad ?></th>
            <th><?php echo $todo->stock ?></th>
            <th><?php echo $todo->estado ?></th>
            <th><a href="./ver_productos.php?edit&id=<?php echo $todo->id ?>">Editar</a></th>
            <th><a href="./ver_productos.php?delete&id=<?php echo $todo->id ?>">Borrar</a></th>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>