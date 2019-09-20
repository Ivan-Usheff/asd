<html>
<head>
    <title>Actualizar</title>
    <link rel='stylesheet' href='css/style-accion.css' type='text/css'>
    <link rel='stylesheet' href='css/style-botones.css' type='text/css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>

</head>
<body class='bg-light'>
<?php
    include 'coneccion.php';
    include 'botonera.php';
    
    if(isset($_GET['value'])&&isset($_GET['value2'])){$value=$_GET['value'];$value2=$_GET['value2'];}
    global $value,$value2;

    function delete($value){
        global $coneccion;
        $res=  mysqli_query($coneccion, "SELECT * FROM empleados WHERE rut='$value'");
        while ($row=  mysqli_fetch_array($res, MYSQLI_ASSOC)){
            if($row['rut']){
                $delete = mysqli_query($coneccion, 'DELETE FROM empleados WHERE rut=$value');
            header('Location: empleados.php');
            }else{
                echo 'Error al borrar usuario.';
            }
        }
        mysqli_close($coneccion);
    }
    function update($value){
        global $coneccion;
        $res=  mysqli_query($coneccion, "SELECT * FROM empleados WHERE rut='$value'");
        while ($row=  mysqli_fetch_array($res, MYSQLI_ASSOC)){
            $a='';
            $m='';
            $d='';
            $fecha=$row['fechanac'];
            for($i=0;$i<strlen($fecha);$i++){
                if($i<4){$a=$a.$fecha[$i];}
                if($i>4&&$i<7){$m=$m.$fecha[$i];}
                if($i>7&&$i<10){$d=$d.$fecha[$i];}
            }
            echo ("
                    <div class='mostar'>
                <h2>Actualizar datos</h2>
                <hr>
                <br>
                <form action='update.php' method='get'>
                    <table class='act'>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                ".$row['id']."
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jefe de Ventas
                            </td>
                            <td><input type='text' name='jefeventas' value='".$row['jefeventas']."' size='30'></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                Supervisor
                            </td>
                            <td><input type='text' name='supervisor' value='".$row['supervisor']."' size='30'></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                Equipo
                            </td>
                            <td><input type='text' name='equipo' value='".$row['equipo']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Nombre
                            </td>
                                <td><input type='text' name='nombre' value='".$row['nombre']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Paterno
                            </td>
                                <td><input type='text' name='apellidop' value='".$row['apellidop']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Materno
                            </td>
                                <td><input type='text' name='apellidom' value='".$row['apellidom']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Rut
                            </td>
                                <td><input type='text' name='rut' value='".$row['rut']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Privilegios
                            </td>
                                <td><input type='text' name='privilegios' value='".$row['privilegios']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Contrasena
                            </td>
                                <td><input type='text' name='contrasena' value='".$row['contrasena']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Fecha Nacimiento
                            </td>
                            <td>
                                <table class='act-f'>
                                    <tr>
                                        <td><input type='text' name='dia' value='".$d."' size='1'></td>
                                        <td>
                                        /
                                        </td>
                                            <td><input type='text' name='mes' value='".$m."' size='1'></td>
                                        <td>
                                        /
                                        </td>
                                            <td><input type='text' name='ano' value='".$a."' size='3'></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 1
                            </td>
                                <td><input type='text' name='telefono1' value='".$row['telefono1']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 2
                            </td>
                                <td><input type='text' name='telefono2' value='".$row['telefono2']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Direccion
                            </td>
                                <td><input type='text' name='direccion' value='".$row['direccion']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                N#
                            </td>
                                <td><input type='text' name='numero' value='".$row['numero']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Depto
                            </td>
                                <td><input type='text' name='departamento' value='".$row['departamento']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Ciudad
                            </td>
                                <td><input type='text' name='ciudad' value='".$row['ciudad']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Comuna
                            </td>
                                <td><input type='text' name='comuna' value='".$row['comuna']."' size='30'></td>
                        </tr>
                        <tr>
                            <td><input type='submit' name='enviar' value='Agregar'></td>
                            <td><a href='empleados.php' class='delete' title='Cancelar'>Cancelar</a></td>
                        </tr>
                    </table>
                </form>
                </div>
            ");
        }
    }
    function insert($value){
        echo ("
                    <div class='mostar'>
                <h2>Ingresar Empleado</h2>
                <hr>
                <br>
            <form action='res-insertar.php' method='post'>
                    <table class='act'>
                        <tr>
                            <td>
                                Equipo
                            </td>
                                <td><select name='equipo'>
                                   <option value='CSM1'>CSM1</option> 
                                   <option value='CSM2'>CSM2</option> 
                                   <option value='CSM3'>CSM3</option>
                                   <option value='CSM4'>CSM4</option>
                                </select>
                                </td>
                        </tr>
                        <tr>
                            <td>
                                Supervisor
                            </td>
                                <td><input type='text' name='supervisor' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Jefe de Ventas
                            </td>
                                <td><input type='text' name='jefeventas' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Nombre
                            </td>
                                <td><input type='text' name='nombre' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Paterno
                            </td>
                                <td><input type='text' name='apellidop' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Materno
                            </td>
                                <td><input type='text' name='apellidom' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Rut
                            </td>
                                <td><input type='text' name='rut' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Privilegios
                            </td>
                                <td><input type='text' name='privilegios' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Contrasena
                            </td>
                                <td><input type='text' name='contrasena' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Fecha Nacimiento
                            </td>
                            <td>
                                <table class='act-f'>
                                    <tr>
                                        <td><input type='text' name='dia' size='1'></td>
                                        <td>
                                        /
                                        </td>
                                            <td><input type='text' name='mes' size='1'></td>
                                        <td>
                                        /
                                        </td>
                                            <td><input type='text' name='ano' size='3'></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 1
                            </td>
                                <td><input type='text' name='telefono1' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 2
                            </td>
                                <td><input type='text' name='telefono2' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Direccion
                            </td>
                                <td><input type='text' name='direccion' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                N#
                            </td>
                                <td><input type='text' name='numero' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Depto
                            </td>
                                <td><input type='text' name='departamento' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Ciudad
                            </td>
                                <td><input type='text' name='ciudad' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Comuna
                            </td>
                                <td><input type='text' name='comuna' size='30'></td>
                        </tr>
                        <tr>
                            <td><input type='submit' name='enviar' value='Agregar'></td>
                            <td><a href='empleados.php' class='delete' title='Cancelar'>Cancelar</a></td>
                        </tr>
                    </table>
                </form>
                </div>
        ");
    }
    function look($value){
        global $coneccion;
        $query= "SELECT id, privilegios, nombre, apellidop, apellidom, rut, contrasena, fechanac, telefono1, '
                . 'telefono2, direccion, numero, departamento, ciudad, comuna, equipo, supervisor, jefeventas FROM empleados WHERE rut=?";
        $res=  mysqli_prepare($coneccion, $query);
        $boolean= mysqli_stmt_bind_param($res, 'i', $value);
        $boolean= mysqli_stmt_execute($res);
        if($boolean){
            $boolean=  mysqli_stmt_bind_result($res, $id, $priv, $nombre, $apellidop, $apellidom, $rut, 
                $pass, $fechanac, $telefono1, $telefono2, $direccion, $numero, $departamento, $ciudad, $comuna, $equipo, $supervisor, $jefeventas);
            while (mysqli_stmt_fetch($res)){
                $a='';
                $m='';
                $d='';
                $fecha=$fechanac;
                for($i=0;$i<strlen($fecha);$i++){
                    if($i<4){$a=$a.$fecha[$i];}
                    if($i>4&&$i<7){$m=$m.$fecha[$i];}
                    if($i>7&&$i<10){$d=$d.$fecha[$i];}
                }$fecha=$d.'-'.$m.'-'.$a;
                echo('
                    <br>
                    <div class="mostar">
                    <h2>Datos del empleado</h2>
                    <hr>
                    <br>
                    <table class="datos">
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                '.$id.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jefe de Ventas
                            </td>
                            <td>
                                '.$jefeventas.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Supervisor
                            </td>
                            <td>
                                '.$supervisor.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Equipo
                            </td>
                            <td>
                                '.$equipo.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nombre
                            </td>
                            <td>
                                '.$nombre.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Paterno
                            </td>
                            <td>
                                '.$apellidop.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Materno
                            </td>
                            <td>
                                '.$apellidom.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Rut
                            </td>
                            <td>
                                '.$rut.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Privilegios
                            </td>
                            <td>
                                '.$priv.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Contrasena
                            </td>
                            <td>
                                '.$pass.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fecha Nacimiento
                            </td>
                            <td>
                                '.$fecha.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono
                            </td>
                            <td>
                                '.$telefono1.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 2
                            </td>
                            <td>
                                '.$telefono2.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Direccion
                            </td>
                            <td>
                                '.$direccion.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                N#
                            </td>
                            <td>
                                '.$numero.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Depto
                            </td>
                            <td>
                                '.$departamento.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ciudad
                            </td>
                            <td>
                                '.$ciudad.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Comuna
                            </td>
                            <td>
                                '.$comuna.'
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="accion.php?value=1&value2='.$rut.'" class="delete" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar el Rut: '.$rut.' ?\')">Eliminar</a>
                    <a href="accion.php?value=2&value2='.$rut.'" class="update" title="Actualizar">Actualizar</a>
                    <a href="empleados.php" class="look" title="Volver">Volver</a>
                    </div>
                    ');
            }
            mysqli_stmt_close($res);
        }
        mysqli_close($coneccion);
    }
    function inicio($value){
        echo $value;
    }
    function usuario($value){
        global $coneccion;
        //$query= 'SELECT nombre, apellidop, apellidom, rut FROM empleados WHERE rut=?';
        $query= "SELECT id, privilegios, nombre, apellidop, apellidom, rut, contrasena, fechanac, telefono1, '
                . 'telefono2, direccion, numero, departamento, ciudad, comuna, equipo, supervisor, jefeventas FROM empleados WHERE rut=?";
        $res=  mysqli_prepare($coneccion, $query);
        $boolean= mysqli_stmt_bind_param($res, 's', $value);
        $boolean= mysqli_stmt_execute($res);
        if($boolean){
            $boolean=  mysqli_stmt_bind_result($res, $id, $priv, $nombre, $apellidop, $apellidom, $rut, 
                $pass, $fechanac, $telefono1, $telefono2, $direccion, $numero, $departamento, $ciudad, $comuna, $equipo, $supervisor, $jefeventas);
            while (mysqli_stmt_fetch($res)){
                $a='';
                $m='';
                $d='';
                $fecha=$fechanac;
                for($i=0;$i<strlen($fecha);$i++){
                    if($i<4){$a=$a.$fecha[$i];}
                    if($i>4&&$i<7){$m=$m.$fecha[$i];}
                    if($i>7&&$i<10){$d=$d.$fecha[$i];}
                }$fecha=$d.'-'.$m.'-'.$a;
                echo('
                    <br>
                    <div class="mostar">
                    <h2>Datos del Usuario</h2>
                    <hr>
                    <br>
                    <table class="datos">
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                '.$id.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jefe de Ventas
                            </td>
                            <td>'.$jefeventas.'</td>
                        </tr>
                        <tr>
                            <td>
                                Supervisor
                            </td>
                            <td>'.$supervisor.'</td>
                        </tr>
                        <tr>
                            <td>
                                Equipo
                            </td>
                            <td>
                                '.$equipo.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nombre
                            </td>
                            <td>
                                '.$nombre.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Paterno
                            </td>
                            <td>
                                '.$apellidop.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Materno
                            </td>
                            <td>
                                '.$apellidom.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Rut
                            </td>
                            <td>
                                '.$rut.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Privilegios
                            </td>
                            <td>
                                '.$priv.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Contrasena
                            </td>
                            <td>
                                '.$pass.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fecha Nacimiento
                            </td>
                            <td>
                                '.$fecha.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono
                            </td>
                            <td>
                                '.$telefono1.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 2
                            </td>
                            <td>
                                '.$telefono2.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Direccion
                            </td>
                            <td>
                                '.$direccion.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                N#
                            </td>
                            <td>
                                '.$numero.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Depto
                            </td>
                            <td>
                                '.$departamento.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ciudad
                            </td>
                            <td>
                                '.$ciudad.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Comuna
                            </td>
                            <td>
                                '.$comuna.'
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="accion.php?value=7&value2='.$rut.'" class="update" title="Actualizar">Actualizar</a>
                    </div>
                    ');
            }
            mysqli_stmt_close($res);
        }
        mysqli_close($coneccion);
    }
    function updateuser($value){
        global $coneccion;
        $res=  mysqli_query($coneccion, "SELECT * FROM empleados WHERE rut='$value'");
        while ($row=  mysqli_fetch_array($res, MYSQLI_ASSOC)){
            $a='';
            $m='';
            $d='';
            $fecha=$row['fechanac'];
            for($i=0;$i<strlen($fecha);$i++){
                if($i<4){$a=$a.$fecha[$i];}
                if($i>4&&$i<7){$m=$m.$fecha[$i];}
                if($i>7&&$i<10){$d=$d.$fecha[$i];}
            }
            echo ("
                    <div class='mostar'>
                <h2>Actualizar datos</h2>
                <hr>
                <br>
                <form action='updateuser.php' method='get'>
                    <table class='act'>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                ".$row['id']."
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jefe de Ventas
                            </td>
                            <td>".$row['jefeventas']."</td>
                        </tr>
                        <tr>
                            <td>
                                Supervisor
                            </td>
                            <td>".$row['supervisor']."</td>
                        </tr>
                        <tr>
                            <td>
                                Equipo
                            </td>
                            <td>".$row['equipo']."</td>
                        </tr>
                        <tr>
                            <td>
                                Nombre
                            </td>
                                <td><input type='text' name='nombre' value='".$row['nombre']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Paterno
                            </td>
                                <td><input type='text' name='apellidop' value='".$row['apellidop']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Apellido Materno
                            </td>
                                <td><input type='text' name='apellidom' value='".$row['apellidom']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Rut
                            </td>
                                <td><input type='text' name='rut' value='".$row['rut']."' size='30'></td>
                            </tr>
                        <tr>
                            <td>
                                Privilegios
                            </td>
                            <td>".$row['privilegios']."</td>
                        </tr>
                        <tr>
                            <td>
                                Contrasena
                            </td>
                                <td><input type='text' name='contrasena' value='".$row['contrasena']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Fecha Nacimiento
                            </td>
                            <td>
                                <table class='act-f'>
                                    <tr>
                                        <td><input type='text' name='dia' value='".$d."' size='1'></td>
                                        <td>
                                        /
                                        </td>
                                            <td><input type='text' name='mes' value='".$m."' size='1'></td>
                                        <td>
                                        /
                                        </td>
                                            <td><input type='text' name='ano' value='".$a."' size='3'></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 1
                            </td>
                                <td><input type='text' name='telefono1' value='".$row['telefono1']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Telefono 2
                            </td>
                                <td><input type='text' name='telefono2' value='".$row['telefono2']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Direccion
                            </td>
                                <td><input type='text' name='direccion' value='".$row['direccion']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                N#
                            </td>
                                <td><input type='text' name='numero' value='".$row['numero']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Depto
                            </td>
                                <td><input type='text' name='departamento' value='".$row['departamento']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Ciudad
                            </td>
                                <td><input type='text' name='ciudad' value='".$row['ciudad']."' size='30'></td>
                        </tr>
                        <tr>
                            <td>
                                Comuna
                            </td>
                                <td><input type='text' name='comuna' value='".$row['comuna']."' size='30'></td>
                        </tr>
                        <tr>
                            <td><input type='submit' name='enviar' value='Agregar'></td>
                            <td><a href='accion.php?value=6&value2=".$row['rut']."' class='delete' title='Cancelar'>Cancelar</a></td>
                        </tr>
                    </table>
                </form>
                </div>
            ");
        }
        mysqli_close($coneccion);
    }
    function show(){
        global $coneccion;
        switch ($_COOKIE['acces-user']){
        case 1:
            $condicion='';
            $delete='';
            $c='<a href="accion.php?value=3&value2=0" class="btn bg-secondary" title="Nuevo">Nuevo Empleado</a>';
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
        echo '
            <table class="datos container">
            <tr>
                <th>
                    Id.
                </th>
                <th>
                    Equipo
                </th>
                <th>
                    Nombre
                </th>
                <th> 
                    Apellido P.
                </th>
                <th> 
                    Rut
                </th>
                <th> 
                    Telefono
                </th>
                <th> 
                    Acceso
                </th>
                <th> 
                    Acciones
                </th>
            </tr>
            ';
        $sql= mysqli_query($coneccion, 'SELECT * FROM empleados '.$condicion.' ORDER BY id ASC');
        while ($fila= mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            switch ($_COOKIE['acces-user']){
            case 1:
                $d='<a href="accion.php?value=1&value2='.$fila['rut'].'" '.$delete.' class="btn bg-danger" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar el Rut: '.$fila['rut'].' ?\')">Eliminar</a>';
                break;
            case 2:
                $d='';
                break;
            case 3:
                $d='';
                break;
            }
            echo('
                <tr>
                    <td>
                        '.$fila['id'].'
                    </td>
                    <td>
                        '.$fila['equipo'].'
                    </td>
                    <td>
                        '.$fila['nombre'].'
                    </td>
                    <td> 
                        '.$fila['apellidop'].'
                    </td>
                    <td> 
                        '.$fila['rut'].'
                    </td>
                    <td> 
                        '.$fila['telefono1'].'
                    </td>
                    <td> 
                        '.$fila['privilegios'].'
                    </td>
                    <td>
                        '.$d.'
                        <a href="accion.php?value=2&value2='.$fila['rut'].'" class="btn btn-primary" title="Actualizar">Actualizar</a>
                        <a href="accion.php?value=5&value2='.$fila['rut'].'" class="btn bg-success" title="Ver">Ver</a>
                    </td>
                </tr>
                ');
        }
    }
    switch ($value){
        case 1:
            delete($value2);
            break;
        case 2:
            update($value2);
            break;
        case 3:
            insert($value2);
            break;
        case 4:
            search($value2);
            break;
        case 5:
            look($value2);
            break;
        case 6:
            usuario($value2);
            break;
        case 7:
            updateuser($value2);
            break;
        case 8:
            show();
            break;
    }
?>
</body>
</table>
</html>