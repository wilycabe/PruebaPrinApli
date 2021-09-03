<?php

    include("./conexion.php");

    $id=(isset($_POST['id'])) ? $_POST['id'] : '';
    $nombre= (isset($_POST['nombre']) ? $_POST['nombre'] : '');
    $capital = (isset($_POST['capital']) ? $_POST['capital'] : '');
    $codigo_iso=(isset($_POST['codigo_iso'])) ? $_POST['codigo_iso'] : '';
    $poblacion=(isset($_POST['poblacion'])) ? $_POST['poblacion'] : '';
    $moneda=(isset($_POST['moneda'])) ? $_POST['moneda'] : '';
    $continente=(isset($_POST['continente'])) ? $_POST['continente'] : '';

    try{
        $queryIngreso=$conexion->query("INSERT INTO `paises` (`id`, `nombre`, `capital`, `codigo_iso`, `poblacion`, `moneda`, `continente`) VALUES ('$id', '$nombre', '$capital', '$codigo_iso', '$poblacion', '$moneda', '$continente');");
        $fila = $queryIngreso->fetch_assoc();
        echo $fila[0];
    }
    catch(Exception $e){
        echo "";
    }
?>