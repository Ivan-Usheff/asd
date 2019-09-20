<?php
    include 'coneccion.php';
    $level=$_COOKIE['acces-user'];
    
    $sql= mysqli_query($coneccion, 'SELECT * FROM privilegios WHERE privilegios=$level')or die('Error: '.mysqli_error($coneccion));
    while ($fila= mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        $fila['ecn'];
    }
        
?>
