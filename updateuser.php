<html>
<head>
    <title>Actualizar</title>
</head>
<?php
    include 'coneccion.php';
    include 'botonera.php';
    
    $nombre=$_GET['nombre'];
    $apellidop=$_GET['apellidop'];
    $apellidom=$_GET['apellidom'];
    $rut=$_GET['rut'];
    $pass=$_GET['contrasena'];
    $a=$_GET['ano'];
    $m=$_GET['mes'];
    $d=$_GET['dia'];
    $telefono1=$_GET['telefono1'];
    $telefono2=$_GET['telefono2'];
    $direccion=$_GET['direccion'];
    $numero=$_GET['numero'];
    $departamento=$_GET['departamento'];
    $ciudad=$_GET['ciudad'];
    $comuna=$_GET['comuna'];
    $supervisor=$_POST['supervisor'];
    $jefeventas=$_POST['jefeventas'];
    if ($a=='' || $m=='' || $d==''){$formato='0001-01-01';}else{$formato=$a.'-'.$m.'-'.$d;}
    
    $cons = 'UPDATE empleados SET nombre='$nombre', apellidop='$apellidop',apellidom='$apellidom',rut='$rut','
            .'contrasena='$pass', fechanac='$formato', telefono1='$telefono1', telefono2='$telefono2''
            .', direccion='$direccion', numero='$numero', departamento='$departamento', ciudad='$ciudad', comuna='$comuna', supervisor='$supervisor', jefeventas='$jefeventas' WHERE rut='$rut'';
    $update = mysqli_query($coneccion, $cons) or die('<h4>Problemas al actualizar: '.mysqli_error($coneccion).'</h4>');
    
    if(!$update){
        echo '<h4>Problemas al actualizar: '.mysqli_error($coneccion).'</h4>';
    }else{
        //return 'Se modificaron los datos correctamente';
        header('Location: accion.php?value=7&value2='.$rut);
    }
?>
</html>