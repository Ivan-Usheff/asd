<html>
<head>
    <title>Cerrar Secion</title>
</head>
<?php
    include 'coneccion.php';
    echo 'Secion Cerrada<br>';
    setcookie('data-user', '', time()-1);
    session_abort();
    mysqli_close($coneccion);
    header('Location: index.php');
?>
</html>