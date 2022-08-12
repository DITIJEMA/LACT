<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Matricula</td>
            <td>Carga</td>
            <td>Estado</td>
            <td>Editar</td>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach($all as $conductores){
        ?>
        <tr>
            <td><?php echo $conductores -> id ?></td>
            <td><?php echo $conductores -> marca ?></td>
            <td><?php echo $conductores -> modelo ?></td>
            <td><?php echo $conductores -> matricula ?></td>
            <td><?php echo $conductores -> carga ?></td>
            <td><?php echo $conductores -> estado ?></td>
            <td><a href="">Editar</a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
    