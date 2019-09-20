<html>
<head>
        <meta charset='UTF-8'>
    <title>Empleados</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
<?php
        if($_COOKIE['acces-user']){
            include 'coneccion.php';
            include 'accion.php';
        }  else {
            header('Location: inicio.php');
        }
        switch ($_COOKIE['acces-user']){
        case 1:
            $condicion='';
            $delete='';
            $c='<a href="accion.php?value=3&value2=0" class="btn bg-secondary text-light" title="Nuevo">Nuevo Empleado</a>';
            break;
        case 2:
            $param1='jefeventas';
            $param2=$_COOKIE['data-user'];
            $condicion='WHERE $param1=$param2';
            $delete='disable';
            $c='';
            break;
        case 3:
            $param1='supervisor';
            $param2=$_COOKIE['data-user'];
            $condicion='WHERE $param1=$param2';
            $delete='disable';
            $c='';
            break;
        }
?>
    <link rel='stylesheet' href='css/style-empleados.css' type='text/css'>
    <link rel='stylesheet' href='css/style-botones.css' type='text/css'>
</head>
<body class='bg-light'>
    <div class='cont'>
    <div class='cont-emp'>
        <h2>Lista empleados</h2>
        <br>
    <hr>
        <br>
        <br>
        <form action='accion.php' method='get'>
            <label><h4>Buscar por rut</h4><br><input type='search' placeholder='Ingrese Rut...' name='value2'></label>
            <input type='hidden' name='value' value='5'>
            <input type='submit' name='enviar' value='Buscar'>
        </form>
    <br>
    <?php
        echo $c;
    ?>
    <br>
    <br>
    <hr>
    <br>
<?php
show();
?>
</table>
</div>
</div>
</body>
</html>