<html>
<head>
    <title>Clientes</title>
</head>
<body class='bg-light'>
<?php
    if(isset($_COOKIE['data-user'])&&isset($_COOKIE['acces-user'])){
        include 'botonera.php';
        include 'coneccion.php';
        include 'accion-clientes.php';
    }  else {
        header('Location: index.php');
    }
?>
<form action='accion-clientes.php' method='get'>
        <label><h4>Buscar N° Solicitud</h4><br><input type='text' name='value2'></label>
        <input type='hidden' name='value' value='1'>
        <input type='submit' name='enviar' value='Buscar'>
        <br>
        <br>
        <?php
        echo"<a href='accion-clientes.php?value=5&value2='.$user.'' title='Nueva solicitud'>Nueva solicitud</a>";
        ?>
    </form>
    <br>
    <hr>
    <br>
<?php   
        swhowc();
?>
</body>
</html>
