<?php
    $db_host='localhost';
    $db_nombre='metlife';
    $db_usuario='root';
    $db_contrasena='';
    
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['pasword'];

    $coneccion=  mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
    setcookie('data-user', $usuario);
    if(mysqli_connect_errno()){
        echo 'Error de coneccion con la BBDD';
        exit();
    }else{
        $res=  mysqli_query($coneccion, 'SELECT * FROM empleados WHERE rut='$usuario'');
        while ($fila= mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            if($fila['rut']==$usuario&&$fila['contrasena']==$contrasena){
                $acces=$fila['privilegios'];
                setcookie('acces-user', $acces);
                $team=$fila['equipo'];
                setcookie('team-user', $team);
                session_start();
                $_SESSION['usuario']=$_POST['usuario'];
                header('Location: inicio.php');
            } else {
                echo (
                        'NO SE ENCONTRO EL USUARIO <br>
                        <a href='index.php'>Home</a>'
                );
            }
        }
        /*
        $qUcon='SELECT * FROM coneccion WHERE rut='$usuario'';
        $res=  mysqli_query($coneccion, $qUcon);
        $fila= mysqli_fetch_row($res);        
        if ($fila[1]!=$usuario){
            $qEntryUser='INSERT INTO coneccion(rut,estado)VALUES ('$usuario','1')';
            $res=  mysqli_query($coneccion, $qEntryUser);
            header('Location: inicio.php');
        }else{
            header('Location: inicio.php');
        }
         */
    }
    mysqli_set_charset($coneccion, 'utf8');
    mysqli_select_db($coneccion, $db_nombre) or die ('No se encontro la BBDD');
?>