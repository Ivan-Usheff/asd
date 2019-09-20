<html>
<head>
    <title>Clientes</title>
</head>
<?php
    include 'coneccion.php';
    if(isset($_GET['value'])&&isset($_GET['value2'])){$value=$_GET['value'];$value2=$_GET['value2'];}
    global $value,$value2;
    
    function lookc($value2){
        include 'botonera.php';
        global $coneccion;
        $sql= 'SELECT numsolicitud, rut, apellidopat, apellidomat, nombres, fechanac, sexo, estadocivil, saludprev, actividad, estatura, peso,'
                . 'direccion, comun, ciudad, telcomercial, telparticular, telmovil, email, banco, tipocuenta, ncuenta, nombrepagador, rutpagador, relacion, cvi,'
                . 'fecharecepcion, incorporaciontitular, incorporaciondepen, apellidop1, apellidom1, nombres1, parentesco1, fechanac1, peso1, estatura1, rut1,'
                . 'valorprima, fecha, dhingreso, rutv FROM clientes WHERE numsolicitud=?';
        $res=  mysqli_prepare($coneccion, $sql);
        $boolean= mysqli_stmt_bind_param($res, 'i', $value2);
        $boolean= mysqli_stmt_execute($res);
        if($boolean){
            $boolean=  mysqli_stmt_bind_result($res, $numsolicitud,$rut,$apellidopat,$apellidomat,$nombres,$fechanac,$sexo,$estadocivil,$saludprev,$actividad,
                    $estatura,$peso,$direccion,$comun,$ciudad,$telcomercial,$telparticular,$telmovil,$email,$banco,$tipocuenta,$ncuenta,$nombrepagador,
                    $rutpagador,$relacion,$cvi,$fecharecepcion,$incorporaciontitular,$incorporaciondepen,$apellidop1,$apellidom1,$nombres1,$parentesco1,
                    $fechanac1,$peso1,$estatura1,$rut1,$valorprima,$fecha,$dhingreso,$rutv);
            while (mysqli_stmt_fetch($res)){
                echo "
                    <h2>Solicitud N°: '.$numsolicitud.'</h2>
                    <hr>
                    <br>
                    CVI: '.$cvi.'
                    Fecha Recepcion: '.$fecharecepcion.'
                    Incorporacion Nuevo Asegurado Tit: ['.$incorporaciontitular.']
                    <br>
                    Incorporacion Nuevo Asegurado Dependiente: ['.$incorporaciondepen.']
                    <br>
                    <hr>
                    Vendedor: '.$rutv.'<br> Fecha de Recepcion: '.$dhingreso.'<br> Fecha Venta: '.$fecha.'
                    <hr>
                    <table>
                        <tr><td><h3>Asegurables Titular</h3></td></tr>
                        <tr>
                            <td>Rut</td>
                            <td>Apellido Paterno</td>
                            <td>Apellido Materno</td>
                            <td>Nombres</td>
                        </tr>
                        <tr>
                            <td>'.$rut.'</td>
                            <td>'.$apellidopat.'</td>
                            <td>'.$apellidomat.'</td>
                            <td>'.$nombres.'</td>
                        </tr>
                        <tr>
                            <td>Fecha de nacimiento</td>
                            <td>Sexo</td>
                            <td>Estado Civil</td>
                            <td>Inst de Salud Prev.</td>
                            <td>Actividad</td>
                            <td>Estatura</td>
                            <td>Peso</td>
                        </tr>
                        <tr>
                            <td>'.$fechanac.'</td>
                            <td>'.$sexo.'</td>
                            <td>'.$estadocivil.'</td>
                            <td>'.$saludprev.'</td>
                            <td>'.$actividad.'</td>
                            <td>'.$estatura.'</td>
                            <td>'.$peso.'</td>
                        </tr>
                        <tr>
                            <td>Direccion Particular</td>
                            <td>Comuna</td>
                            <td>Ciudad</td>
                        </tr>
                        <tr>
                            <td>'.$direccion.'</td>
                            <td>'.$comun.'</td>
                            <td>'.$ciudad.'</td>
                        </tr>
                        <tr>
                            <td>Telefono Comercial</td>
                            <td>Telefono Particular</td>
                            <td>Telefono Movil</td>
                            <td>E-Mail</td>
                        </tr>
                        <tr>
                            <td>'.$telcomercial.'</td>
                            <td>'.$telparticular.'</td>
                            <td>'.$telmovil.'</td>
                            <td>'.$email.'</td>
                        </tr>
                        <tr>
                            <td>Banco</td>
                            <td>Tipo de Cuenta</td>
                            <td>N° Cuenta</td>
                        </tr>
                        <tr>
                            <td>'.$banco.'</td>
                            <td>'.$tipocuenta.'</td>
                            <td>'.$ncuenta.'</td>
                        </tr>
                        <tr><td><h3>Pagador</h3></td></tr>
                        <tr>
                            <td>Nombre Pagador</td>
                            <td>Rut</td>
                            <td>Relacion Parentesco</td>
                        </tr>
                        <tr>
                            <td>'.$nombrepagador.'</td>
                            <td>'.$rutpagador.'</td>
                            <td>'.$relacion.'</td>
                        </tr>
                        <tr><td><h3>Asegurados Dependientes</h3></td></tr>
                        <tr>
                            <td>Apellido Paterno</td>
                            <td>Apellido Materno</td>
                            <td>Nombres</td>
                            <td> Parentesco</td>
                            <td>Fecha Naciiento</td>
                            <td>Peso</td>
                            <td>Estatura</td>
                            <td>Rut</td>
                        </tr>
                        <tr>
                            <td>'.$apellidop1.'</td>
                            <td>'.$apellidom1.'</td>
                            <td>'.$nombres1.'</td>
                            <td>'.$parentesco1.'</td>
                            <td>'.$fechanac1.'</td>
                            <td>'.$peso1.'</td>
                            <td>'.$estatura1.'</td>
                            <td>'.$rut1.'</td>
                        </tr>
                        <tr>
                            <td><h3>Prima</h3></td>
                        </tr>
                        <tr>
                            <td>'.$valorprima.'</td>
                        </tr>
                    </table>
                            <td><a href='clientes.php' class='look' title='Volver'>Volver</a></td>
                            <td><a href='accion-clientes.php?value=12&value2='.$numsolicitud.'' class='look' title='Next'>Next</a></td>
                    ";
                }
        }
    }
    function serchc($value2){
        include 'botonera.php';
        echo 'Serchc();'.' Valor enviado: '.$value2;
    }
    function swhowc(){
        global $coneccion;
            echo ("
                <table border='1'>
                    <tr>
                    </tr>
                    <tr>
                        <td>N# Solicitud</td>
                        <td>Rut</td>
                        <td>Apellido P.</td>
                        <td>Apellido M.</td>
                        <td>Nombre</td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Prima</td>
                        <td>Estado</td>
                    </tr>
                    ");
        $sql= mysqli_query($coneccion, 'SELECT * FROM clientes ORDER BY numsolicitud ASC');
        while ($fila= mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            echo ("
                    <tr>
                        <td>".$fila['numsolicitud']."</td>
                        <td>".$fila['rut']."</td>
                        <td>".$fila['apellidopat']."</td>
                        <td>".$fila['apellidomat']."</td>
                        <td>".$fila['nombres']."</td>
                        <td>".$fila['telmovil']."</td>
                        <td>".$fila['email']."</td>
                        <td>".$fila['valorprima']."</td>
                        <td>".$fila['estado']."</td>
                        <td><a href='accion-clientes.php?value=1&value2='".$fila['numsolicitud']."' class='look' title='Ver'>Ver</a></td>
                    </tr>
                   ");
        }
        echo '</table>';
    }
    function updatec(){
    }
    function insertc(){
        global $coneccion;
        include 'botonera.php';
        $rutv=$_COOKIE['data-user'];
        echo "
            <div class='container mt-3'>
            <form action='fomulario2.php' method='post'>
                <div id='accordion'> 
                                <div id='encabezado'>
                                    <h4>Solicitud N°: <input type='text' name='solicitud'></h4>
                                    Vendedor: <input type='text' disabled name='rutv' >
                                    Fecha Venta: <input type='date' name='fecha'>
                                    Fecha Ingreso: <input type='text' disabled name='dhingreso' >
                                </div>
                                <hr>
                        <div class='card-header'>
                            <a class='card-link' data-toggle='collapse' href='#collapseOne'>
                                INCORPORACION
                            </a>
                        </div>
                        <div id='collapseOne' class='collapse' data-parent='#accordion'>
                            <div id='formulario-inc' class='card-body list-group-item-primary'>
                                <div id='grilla-1 list-group-item-primary'>
                                    <div id='titulogrilla' class='text-center'><h4>ASEGURABLES TITULAR</h4></div>
                                    <div id='f1' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label> Rut </label></div>
                                            <div class=''><input type='text' name='rut'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Apellido Paterno</label></div>
                                            <div class=''><input type='text' name='apellidopat'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class='''><label>Apellido Materno</label></div>
                                            <div class=''><input type='text' name='apellidomat'></div>
                                        </div>
                                        <div id='r4' class='col'>
                                            <div class=''><label>Nombres</label></div>
                                            <div class=''><input type='text' name='nombres'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f2' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Fecha de nacimiento</label></div>
                                            <div class=''><input type='date' name='fechanac'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Sexo</label></div>
                                            <div class=''><input type='text' name='sexo' size='2'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Est. Civil</label></div>
                                            <div class=''><input type='text' name='estadocivil' size='2'></div>
                                        </div>
                                        <div id='r4' class='col'>
                                            <div class=''><label>Inst de Salud Prev.</label></div>
                                            <div class=''><input type='text' name='isapre'></div>
                                        </div>
                                        <div id='r5' class='col'>
                                            <div class=''><label>Actividad</label></div>
                                            <div class=''><input type='text' name='actividad'></div>
                                        </div>
                                        <div id='r6' class='col'>
                                            <div class=''><label>Estatura</label></div>
                                            <div class=''><input type='text' name='estatura' size='2'></div>
                                        </div>
                                        <div id='r7' class='col'>
                                            <div class=''><label>Peso</label></div>
                                            <div class=''><input type='text' name='peso' size='2'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f3' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Direccion Particular</label></div>
                                            <div class=''><input type='text' name='direccion' size='50%'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Comuna</label></div>
                                            <div class=''><input type='text' name='comuna'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Ciudad</label></div>
                                            <div class=''><input type='text' name='ciudad'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f4' class='form-row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Telefono Comercial</label></div>
                                            <div class=''><input type='text' name='telcom'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Telefono Particular</label></div>
                                            <div class=''><input type='text' name='telpar'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Telefono Movil</label></div>
                                            <div class=''><input type='text' name='telmov'></div>
                                        </div>
                                        <div id='r4' class='col' >
                                            <div class=''><label>E-Mail</label></div>
                                            <div class=''><input type='text' name='email'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f5' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Datos cuentas Bancarias</label></div>
                                            <div class=''><label></label></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Banco</label></div>
                                            <div class=''><input type='text' name='banco'></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Tipo de Cuenta</label></div>
                                            <div class=''><input type='text' name='tipocuenta'></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>N° Cuenta</label></div>
                                            <div class=''><input type='text' name='ncuenta'></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id='grilla-2'>
                                    <div id='titulogrilla' class='text-center'><h4>PAGADOR</h4></div>
                                    <div id='f1' class='row'>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Nombre Pagador</label></div>
                                            <div class=''><input type='text' name='nombrepagador'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Rut</label></div>
                                            <div class=''><input type='text' name='rutpagador'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Relacion Parentesco</label></div>
                                            <div class=''><input type='text' name='relacion'></div>
                                        </div>
                                    </div>
                                </div>
                                    <br>
                                <div id='grilla-3'>
                                    <div id='titulogrilla' class='text-center'><h4>ASEGURADOS DEPENDIENTES</h4></div>
                                    <div id='f1' class='form-row p-sm-2'>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Apellido Paterno</label></div>
                                            <div class=''><input type='text' name='apellidopd'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Apellido Materno</label></div>
                                            <div class=''><input type='text' name='apellidomd'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Nombres</label></div>
                                            <div class=''><input type='text' name='nombresd'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Parentesco</label></div>
                                            <div class=''><input type='text' name='parentescod'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Fecha Naciiento</label></div>
                                            <div class=''><input type='date' name='fechanacd'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Peso</label></div>
                                            <div class=''><input type='text' name='pesod'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Estatura</label></div>
                                            <div class=''><input type='text' name='relaestaturaciond'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Rut</label></div>
                                            <div class=''><input type='text' name='rutd'></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id='grilla-3'>
                                    <div id='titulogrilla' class='text-center'><h4>PRIMA</h4></div>
                                    <div id='f1' class='row justify-content-center'>
                                        <div id='r1' class='col'>
                                            <div class=''><input type='text' name='prima'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='card-header'>
                            <a class='card-link' data-toggle='collapse' href='#collapse2'>
                                CONVENIO ACCIDENTES COSTO CERO
                            </a>
                        </div>
                        <div id='collapse2' class='collapse' data-parent='#accordion'>
                            <div class='card-body list-group-item-primary'>
                                <div class='conteiner'>
                                    <div class='row'>
                                        <div id='r1' class='col'>
                                                <div class=''><label> Fecha </label></div>
                                                <div class=''><input type='date' name='fechacacc'></div>
                                                <div class=''><label> Responsable de pago </label></div>
                                                <div class=''><input type='text' name='responsable'></div>
                                                <div class=''><label> Direccion </label></div>
                                                <div class=''><input type='text' name='direccioncacc'></div>
                                                <div class=''><label> E-mail </label></div>
                                                <div class=''><input type='email' name='emailcacc'></div>
                                        </div>
                                        <div class='col'>
                                                <div class=''><label> Numero Solicitud </label></div>
                                                <div class=''><input type='text' name='solicitudcacc'></div>
                                                <div class=''><label> Rut </label></div>
                                                <div class=''><input type='text' name='rutcacc'></div>
                                                <div class=''><label> Comuna </label></div>
                                                <div class=''><input type='text' name='comunacacc'></div>
                                                <div class='row'>
                                                    <div class='col'>
                                                        <div class=''><label> Telefono </label></div>
                                                        <div class=''><input type='text' name='telefonocacc'></div>
                                                    </div>
                                                    <div class='col'>
                                                        <div class=''><label> Celular </label></div>
                                                        <div class=''><input type='text' name='celularcacc'></div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div><h4>DATOS INSCRITOS</h4></div>
                                    <div class='row'>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Paterno </label></div>
                                                <div class=''><input type='text' name='apellidopatd'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Materno </label></div>
                                                <div class=''><input type='text' name='apellidomatd'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Nombres </label></div>
                                                <div class=''><input type='text' name='nombresd'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> RUT </label></div>
                                                <div class=''><input type='text' name='rutd'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Fecha nacimiento </label></div>
                                                <div class=''><input type='date' name='fechanacd'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Isapre </label></div>
                                                <div class=''><input type='text' name='isapred' size='10'></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='card-header'>
                            <a class='card-link' data-toggle='collapse' href='#collapse3'>
                                PAGO PRIMERA PRIMA
                            </a>
                        </div>
                        <div id='collapse3' class='collapse' data-parent='#accordion'>
                            <div class='card-body list-group-item-primary'>
                                <div class='conteiner'>
                                    <div class='row'>
                                        <div class='col'><label> Fecha </label></div>
                                        <div class='col'><input type='date' name='fechap'></div>
                                        <div class='col'><label> N° IPP </label></div>
                                        <div class='col'><input type='text' name='ipp'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'><label>Nombre Contratante:</label> </div>
                                        <div class='col-2'><input type='text' name='nombrep' size='50%'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'><label>Rut Contratante:</label></div>
                                        <div class='col-2'><input type='text' name='rutp' size='50%'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                            <div class='col col-4'>
                                                <div class=''><label> Numero Propuestas </label></div>
                                                <div class=''><input type='text' name='solicitudppp' size='30%'></div>
                                            </div>
                                            <div class='col col-4'>
                                                <div class=''><label> Valor prima $ </label></div>
                                                <div class=''><input type='text' name='valorprimap' size='30%'></div>
                                            </div>
                                            <div class='col col-4'>
                                                <div class=''><label> Valor prima UF </label></div>
                                                <div class=''><input type='text' name='valorprimauf' size='30%'></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='card-header'>
                            <a class='card-link' data-toggle='collapse' href='#collapse4'>
                                MANDATO CUENTA CORRIENTE
                            </a>
                        </div>
                        <div id='collapse4' class='collapse' data-parent='#accordion'>
                            <div class='card-body list-group-item-primary'>
                                <div class='conteiner'>
                                    <div class='row'>
                                        <div id='r1' class='col'>
                                            <div class='col'>Fecha</div>
                                            <div class='col input-group'><input type='date' name='fechamcc'></div>
                                            <div class='col'>Nombre Titular: </div>
                                            <div class='col input-group'><input type='text' name='titularcuentamcc'></div>
                                            <div class='col'>Banco: </div>
                                            <div class='col'><input type='text' name='titularcuentamcc'></div>
                                            <div class='col'>Sucursal: </div>
                                            <div class='col'><input type='text' name='sucursalmcc'></div>
                                        </div>
                                        <div class='col'>
                                            <div class='col'>Numero Cuenta: </div>
                                            <div class='col'><input type='text' name='numerocuentamcc'></div>
                                            <div class='col'>Tipo: </div>
                                            <div class='btn-group col'>
                                                <select class='custom-select' id='inputGroupSelect01'>
                                                    <option selected>Tipo de Cuenta</option>
                                                    <option value='corriente' name='tipo'>Cuenta Corriente</option>
                                                    <option value='vista' name='tipo'>Cuenta Vista</option>
                                                </select>
                                            </div>
                                            <div class='col'>Rut Titular: </div>
                                            <div class='col'><input type='text' name='rutmcc'></div>
                                            <div class='col'>Llave de Cobranza: </div>
                                            <div class='col'><input type='text' name='rutmcc'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='card-header'>
                            <a class='card-link' data-toggle='collapse' href='#collapse5'>
                                MANDATO TARJETA DE CREDITO
                            </a>
                        </div>
                        <div id='collapse5' class='collapse' data-parent='#accordion'>
                            <div class='card-body list-group-item-primary'>
                                <div class='conteiner'>
                                    <div class='row'>
                                        <div class='col-2'>Fecha: </div>
                                        <div class='col-2'><input type='date' name='fechamtc'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Fecha Vencimiento: </div>
                                        <div class='col-2'><input type='date' name='vencimientomtc'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Numero Tarjeta</div>
                                        <div class='col-2'><input type='text' name='numerotarjeta'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <input type='checkbox' aria-label='Checkbox for following text input' name='empresamtc' value='visa'>
                                        <div class='col'>VISA</div>
                                        <input type='checkbox' aria-label='Checkbox for following text input' name='empresamtc' value='master card'>
                                        <div class='col'>MASTER CARD</div>
                                        <input type='checkbox' aria-label='Checkbox for following text input' name='empresamtc' value='diners'>
                                        <div class='col'>DINERS</div>
                                        <input type='checkbox' aria-label='Checkbox for following text input' name='empresamtc' value='magna'>
                                        <div class='col'>MAGNA</div>
                                        <input type='checkbox' aria-label='Checkbox for following text input' name='empresamtc' value='amex'>
                                        <div class='col'>AMEX</div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>ID de Cobro</div>
                                        <div class='col-2'><input type='text' name='idcobromtc'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <input type='submit' class='btn btn-primary' name='enviar' value='Agregar'>
            </form>
        </div>
        ";
    }
    switch ($value){
    case 1:
        lookc($value2);
        break;
    case 12:
        lookc2($value2);
        break;
    case 13:
        lookc3($value2);
        break;
    case 2:
        serchc($value2);
        break;
    case 3:
        showc();
        break;
    case 4:
        updatec($value2);
        break;
    case 5:
        insertc();
        break;
    }
?>
    
</html>
