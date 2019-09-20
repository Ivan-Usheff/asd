<?php
    $db_host='localhost';
    $db_nombre='metlife';
    $db_usuario='root';
    $db_contrasena='';

    $coneccion=  mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
    
    if(mysqli_connect_errno()){
        echo 'Error de coneccion con la BBDD';
        exit();
    }else{
    }
    
    mysqli_set_charset($coneccion, 'utf8');
    mysqli_select_db($coneccion, $db_nombre) or die ('No se encontro la BBDD');
    
?>