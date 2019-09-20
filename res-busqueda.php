<html>
<head>
    <title>Buscar</title>
</head>
<table>
    <tr>
        <td>
            Nombre
        </td>
        <td> 
            Apellido
        </td>
        <td> 
            Rut
        <td>
    </tr>
<?php
    include 'coneccion.php';
    include 'botonera.php';
    
    $buscar=$_GET['buscar'];
    $res=  mysqli_query($coneccion, 'SELECT * FROM empleados WHERE nombre='$buscar'');
     
    while ($fila= mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        if($fila['nombre']==NULL){
            header('Location: busqueda.php');
        }else{
            echo('<tr>
                    <td>
                        '.$fila['nombre'].'
                    </td>
                    <td> 
                        '.$fila['apellidop'].'
                    </td>
                    <td> 
                        '.$fila['rut'].'</td>
                    <td>
                    <td> 
                        <a href='res-eliminar.php' title='Eliminar''.$fila['rut'].' method='get'>Eliminar</a>
                    </td>
                    </tr>');
            echo '<br>';
        }
    }
?>
</table>
</html>