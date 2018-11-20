<?php session_start();

// Archivo index del admin

require 'config.php';
require '../funciones.php';

$conexion = conexion($db_config);
if(!$conexion){
    header('Location: error.php');
}

comprobarSession();

$posts = obtener_posts($blog_config['post_por_pagina'], $conexion);


require '../views/admin_index.view.php';

?>