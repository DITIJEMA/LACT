<?php
    date_default_timezone_set("UTC");
    $dia= date("d");
    $mes = date("m");
    $anio = date("Y");

    $fecha = "$dia-$mes-$anio";
    printf($fecha);
?>