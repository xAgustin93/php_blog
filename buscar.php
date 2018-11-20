<?php

    require 'admin/config.php';
    require 'funciones.php';

    $conexion = conexion($db_config);
    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
        $busqueda = limpiarDatos($_GET['busqueda']);


        $statement = $conexion->prepare(
            'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
        );
        $statement->execute(array(':busqueda' => "%$busqueda%"));
        $resultados = $statement->fetchAll();

        if(empty($resultado)){
            $titulo = 'No se encontraron articulo con el resultado: ' . $busqueda;
        } else {
            $titulo = 'Resultados de la busqueda: ' . $busqueda;
        }
    } else {
        header('Location: ' . RUTA . '/index.php');
    }
    
    require 'views/buscar.view.php';

?>