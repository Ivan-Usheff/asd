<html>
    <link rel='stylesheet' href='css/style-botonera.css' type='text/css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('index.php');
    }else{
        $user=$_SESSION['usuario'];
        include 'coneccion.php';
    }
    $acces=$_COOKIE['acces-user'];
    $team=$_COOKIE['team-user'];
    $inicio="<li class='nav-item'><a class='nav-link' href='inicio.php' title='Inicio'>Inicio</a></li>";
    $formulario="<li class='nav-item'><a class='nav-link' href='formulario1.php' title='Inicio'>formulario1</a></li>";
    $empleado="<li class='nav-item'><a class='nav-link' href='empleados.php' title='Empleados'>Empleados</a></li>";
    $clientes="<li class='nav-item'><a class='nav-link' href='clientes.php' title='Clienes'>Clientes</a></li>";
    $usuario="<li class='nav-item'><a class='nav-link' href='accion.php?value=6&value2='.$user.''  title='Usuario'>Usuario</a></li>";
    $cerrar="<li class='nav-item'><a class='nav-link' href='close.php'  title='Cerrar Cesion' >Cerrar Cesion</a></li>";
    $agenda="<li class='nav-item'><a class='nav-link' href='agenda.php'  title='Agenda' >Agenda</a></li>";
    $paginacion="<li class='nav-item'><a class='nav-link' href='paginacion.php'  title='paginacion' >Paginacion</a></li>";
    
    echo '
    <div class="nav justify-content-end bg-dark" id="barnav">
        <ul class="nav justify-content-end">
    ';
            if($acces<=3){echo '
                '.$inicio.'
                '.$formulario.'
                '.$empleado.'
                '.$clientes.'
                '.$usuario.'
                '.$agenda.'
                '.$cerrar.'
                '.$paginacion.'
            ';}else{echo '
            '.$inicio.'
            '.$clientes.'
            '.$usuario.'
            '.$usuario.'
            '.$cerrar.'
                '.$paginacion.'
            ';}echo '
        </ul>
    </div>
    
    ';
    ?>
</html>
