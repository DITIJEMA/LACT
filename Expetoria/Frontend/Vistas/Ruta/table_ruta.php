<table>
    <thead class="table table-dark">
        <tr>
            <td>ID</td>
            <td>Destino</td>
            <td><a href="./see_ruta.php?create"><button type="button" class="btn btn-primary">+AGREGAR</button></a></td>
        </tr>
    </thead>

    <tbody class="table table-hover">
        <?php
            foreach($all as $rutas){
        ?>

        <tr>
            <td><?php echo $rutas -> id ?></td>
            <td><?php echo $rutas -> destino ?></td>
        </tr>

        <?php
            }
        ?>
    </tbody>
</table>