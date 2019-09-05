<?php

    $conectar = new mysqli('localhost','practicas','practicas','practicas3');

    if($conectar)
    {
        $nombre_banco = $_POST['inp_nombre_banco'];
        $sucursal = $_POST['inp_sucursal'];
        $movimiento = $_POST['inp_movimiento'];

        $sql = "insert into sucursal(nombre_banco,sucursal,movimiento) values('".$nombre_banco."','".$sucursal."','".$movimiento."')";

        $resultado = mysqli_query($conectar,$sql);

        echo $resultado;

    }else{
        echo "Error en la conexión";
    }
?>