<table>
    <thead class="table table-dark">
        <tr>
            <td>Id</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Matricula</td>
            <td>Carga</td>
            <td>Estado</td>
            <td>Editar</td>
            <td><a href="./see-vehiculo.php?create"><button type="button" class="btn btn-primary">+AGREGAR</button></a></td>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach($all as $conductores){
                $status = $conductores -> estado;
                if($status == 'A'){
        ?>

        <tr class="table table-hover bg-info">
            <td><?php echo $conductores -> id ?></td>
            <td><?php echo $conductores -> marca ?></td>
            <td><?php echo $conductores -> modelo ?></td>
            <td><?php echo $conductores -> matricula ?></td>
            <td><?php echo $conductores -> carga ?></td>
            <td><?php echo $conductores -> estado ?></td>
            <td><a href="./see-vehiculo.php?edit&id=<?php echo $conductores->id ?>">Editar</a></td>
        </tr>

        <?php
                } else if($status == 'I'){
        ?>

        <tr class="table table-hover bg-danger">
            <td><?php echo $conductores -> id ?></td>
            <td><?php echo $conductores -> marca ?></td>
            <td><?php echo $conductores -> modelo ?></td>
            <td><?php echo $conductores -> matricula ?></td>
            <td><?php echo $conductores -> carga ?></td>
            <td><?php echo $conductores -> estado ?></td>
            <td><a href="./see-vehiculo.php?edit&id=<?php echo $conductores->id ?>">Editar</a></td>
        </tr>

        <?php
            } else{
        ?>

        <tr class="table table-hover bg-warning">
            <td><?php echo $conductores -> id ?></td>
            <td><?php echo $conductores -> marca ?></td>
            <td><?php echo $conductores -> modelo ?></td>
            <td><?php echo $conductores -> matricula ?></td>
            <td><?php echo $conductores -> carga ?></td>
            <td><?php echo $conductores -> estado ?></td>
            <td><a href="./see-vehiculo.php?edit&id=<?php echo $conductores->id ?>">Editar</a></td>
        </tr>

        <?php
                }
            }
        ?>
    </tbody>
</table>