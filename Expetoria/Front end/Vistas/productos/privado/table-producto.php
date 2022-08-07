<table>
    <thead class="table table-dark">
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Tipo</th>
            <th>Cantidad (por caja)</th>
            <th>Stock</th>
            <th>Estado</th>
        </tr>
    </thead>

    <tbody class="table table-hover">

    <?php
        foreach($all as $all_p){
    ?>

        <tr>
            <th><?php $all_p -> id ?></th>
            <th><?php $all_p -> descripcion ?></th>
            <th><?php $all_p -> precio ?></th>
            <th><?php $all_p -> imagen ?></th>
            <th><?php $all_p -> tipo ?></th>
            <th><?php $all_p -> cantidad ?></th>
            <th><?php $all_p -> stock ?></th>
            <th><?php $all_p -> estado ?></th>
        </tr>

        <?php
            }
        ?>
    </tbody>
</table>