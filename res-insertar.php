<html>
<head>
    <title>Inicio</title>
</head>
<?php
    include 'coneccion.php';
    include 'botonera.php';
    
    $equipo=$_POST['equipo'];
    $nombre=$_POST['nombre'];
    $apellidop=$_POST['apellidop'];
    $apellidom=$_POST['apellidom'];
    $rut=$_POST['rut'];
    $contrasena=$_POST['contrasena'];
    $priv=$_POST['privilegios'];
    $a=$_POST['ano'];
    $m=$_POST['mes'];
    $d=$_POST['dia'];
    $telefono1=$_POST['telefono1'];
    $telefono2=$_POST['telefono2'];
    $direccion=$_POST['direccion'];
    $numero=$_POST['numero'];
    $departamento=$_POST['departamento'];
    $ciudad=$_POST['ciudad'];
    $comuna=$_POST['comuna'];
    $supervisor=$_POST['supervisor'];
    $jefeventas=$_POST['jefeventas'];
    $formato=$a.'-'.$m.'-'.$d;
    
    $query='INSERT INTO empleados ('
            . 'equipo,nombre,apellidop,apellidom,rut,contrasena,'
            . 'privilegios, fechanac, telefono1, telefono2, direccion, numero, '
            . 'departamento, ciudad, comuna, supervisor, jefeventas) '
            . 'VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)' or die('Problemas al cargar'.mysqli_error($coneccion));
    $insert=  mysqli_prepare($coneccion, $query);
    $ready=  mysqli_stmt_bind_param($insert,'ssssiiisiisiissii',
            $equipo,$nombre,$apellidop,$apellidom,$rut,$contrasena,$priv,$formato,$telefono1,
            $telefono2,$direccion,$numero,$departamento,$ciudad,$comuna,$supervisor, $jefeventas);
    $ready= mysqli_stmt_execute($insert);
    if($ready){
        mysqli_stmt_close($insert);
        header('Location: empleados.php');
    }else{
        echo 'Problemas al cargar'.mysqli_error($coneccion);
    }
?>
</html>