<html>
<head>
    <title>Clientes</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
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
        include 'coneccion.php';
        include 'botonera.php';
        
        //value=''.date('Y-m-d H:i:s').''
        //value=''.$rutv.''
        
        $sqli= 'SELECT * FROM incorporacion WHERE solicitud=?';
        $resi=  mysqli_prepare($coneccion, $sqli);
        mysqli_stmt_bind_param($resi, 'i', $value2);
        mysqli_stmt_execute($resi);
        mysqli_stmt_bind_result($resi, $solicitud,$cvi,$fecharecepcion,$fecha,$incorporacion,$rut,$apellidopat,$apellidomat,$nombres,
        $fechanac,$sexo,$estadocivil,$isapre,$actividad,$estatura,$peso,$direccion,$comuna,$ciudad,$telcom,$telpar,$telmov,$email,$banco,
        $tipocuenta,$ncuenta,$nombrepagador,$rutpagador,$relacion,$prima,$rutv,$equipo);
        while (mysqli_stmt_fetch($resi)){
        }
        $sqla= 'SELECT * FROM asegurablesdependientes WHERE solicitud=?';
        $resa=  mysqli_prepare($coneccion, $sqla);
        mysqli_stmt_bind_param($resa, 'i', $value2);
        mysqli_stmt_execute($resa);
        mysqli_stmt_bind_result($resa, $solicituda,$apellidopata,$apellidomata,$nombrea,$parentescoa,$fechanaca,$pesoa,$estaturaa,$ruta);
        while (mysqli_stmt_fetch($resa)){
        }
        $sqlc= 'SELECT * FROM cacc WHERE solicitud=?';
        $resc=  mysqli_prepare($coneccion, $sqlc);
        mysqli_stmt_bind_param($resc, 'i', $value2);
        mysqli_stmt_execute($resc);
        mysqli_stmt_bind_result($resc, $fechac,$solicitudcacc,$responsable,$rutcacc,$direccioncacc,$comunacacc,$emailcacc,$telefono,$celular);
        while (mysqli_stmt_fetch($resc)){
        }
        $sqld= 'SELECT * FROM datosinscritos WHERE solicitud=?';
        $resd=  mysqli_prepare($coneccion, $sqld);
        mysqli_stmt_bind_param($resd, 'i', $value2);
        mysqli_stmt_execute($resd);
        mysqli_stmt_bind_result($resd, $Solicitudd,$apellidopatd,$apellidomatd,$nombresd,$rutd,$fechanacd,$isapred);
        while (mysqli_stmt_fetch($resd)){
        }
        $sqlp= 'SELECT * FROM ppp WHERE solicitud=?';
        $resp=  mysqli_prepare($coneccion, $sqlp);
        mysqli_stmt_bind_param($resp, 'i', $value2);
        mysqli_stmt_execute($resp);
        mysqli_stmt_bind_result($resp, $ipp,$fechap,$nombrep,$rutp,$telefonop,$valoruf,$fehauf,$solicitudppp,$valorprimap,$valorprimauf);
        while (mysqli_stmt_fetch($resp)){
        }
        $sqlpac= 'SELECT * FROM pac WHERE solicitud=?';
        $respac=  mysqli_prepare($coneccion, $sqlpac);
        mysqli_stmt_bind_param($respac, 'i', $value2);
        mysqli_stmt_execute($respac);
        mysqli_stmt_bind_result($respac, $solicitudpac,$fechapac,$titularcuenta,$bancopac,$sucursal,$numerocuenta,$tipo,$rutpac,$llave);
        while (mysqli_stmt_fetch($respac)){
        }
        $sqlpat= 'SELECT * FROM pat WHERE solicitud=?';
        $respat=  mysqli_prepare($coneccion, $sqlpat);
        mysqli_stmt_bind_param($respat, 'i', $value2);
        mysqli_stmt_execute($respat);
        mysqli_stmt_bind_result($respat, $fechapat,$solicitudpat,$numerotarjeta,$vencimiento,$empresa,$bancopat,$nombretitular,$rutpat,$idcobro);
        while (mysqli_stmt_fetch($respat)){
        }
        $sqlv= 'SELECT * FROM ventas WHERE solicitud=?';
        $resv=  mysqli_prepare($coneccion, $sqlv);
        mysqli_stmt_bind_param($resv, 'i', $value2);
        mysqli_stmt_execute($resv);
        mysqli_stmt_bind_result($resv, $solicitudv,$rutv,$fechav,$primav,$equipo);
        while (mysqli_stmt_fetch($resv)){
        }
    
        echo "
        <div class='container mt-3'>
            <form action='fomulario2.php' method='post'>
                <div id='accordion'> 
                                <div id='encabezado'>
                                    <h4>Solicitud N°: ".$solicitud."</h4>
                                    Vendedor: ".$rutv."
                                    Fecha Venta: ".$fecha."
                                    Fecha Ingreso: ".$fecharecepcion."
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
                                    <hr>
                                    <div id='f1' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label> Rut </label></div>
                                            <div class='text-info'><h4>".$rut."</h4></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Apellido Paterno</label></div>
                                            <div class='text-info'><h4>".$apellidopat."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class='''><label>Apellido Materno</label></div>
                                            <div class='text-info'><h4>".$apellidomat."</h4></div>
                                        </div>
                                        <div id='r4' class='col'>
                                            <div class=''><label>Nombres</label></div>
                                            <div class='text-info'><h4>".$nombres."</h4></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id='f2' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Fecha de nacimiento</label></div>
                                            <div class='text-info'><h5>".$fechanac."</h5></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Sexo</label></div>
                                            <div class='text-info'><h4>".$sexo."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Est. Civil</label></div>
                                            <div class='text-info'><h4>".$estadocivil."</h4></div>
                                        </div>
                                        <div id='r4' class='col'>
                                            <div class=''><label>Inst de Salud Prev.</label></div>
                                            <div class='text-info'><h4>".$isapre."</h4></div>
                                        </div>
                                        <div id='r5' class='col'>
                                            <div class=''><label>Actividad</label></div>
                                            <div class='text-info'><h4>".$actividad."</h4></div>
                                        </div>
                                        <div id='r6' class='col'>
                                            <div class=''><label>Estatura</label></div>
                                            <div class='text-info'><h4>".$estatura."</h4></div>
                                        </div>
                                        <div id='r7' class='col'>
                                            <div class=''><label>Peso</label></div>
                                            <div class='text-info'><h4>".$peso."</h4></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id='f3' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Direccion Particular</label></div>
                                            <div class='text-info'><h4>".$direccion."</h4></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Comuna</label></div>
                                            <div class='text-info'><h4>".$comuna."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Ciudad</label></div>
                                            <div class='text-info'><h4>".$ciudad."</h4></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id='f4' class='form-row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Telefono Comercial</label></div>
                                            <div class='text-info'><h4>".$telcom."</h4></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Telefono Particular</label></div>
                                            <div class='text-info'><h4>".$telpar."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Telefono Movil</label></div>
                                            <div class='text-info'><h4>".$telmov."</h4></div>
                                        </div>
                                        <div id='r4' class='col' >
                                            <div class=''><label>E-Mail</label></div>
                                            <div class='text-info'><h4>".$email."</h4></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id='f5' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Datos cuentas Bancarias</label></div>
                                            <div class=''><label></label></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Banco</label></div>
                                            <div class='text-info'><h4>".$banco."</h4></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Tipo de Cuenta</label></div>
                                            <div class='text-info'><h4>".$tipocuenta."</h4></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>N° Cuenta</label></div>
                                            <div class='text-info'><h4>".$ncuenta."</h4></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id='grilla-2'>
                                    <div id='titulogrilla' class='text-center'><h4>PAGADOR</h4></div>
                                    <div id='f1' class='row'>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Nombre Pagador</label></div>
                                            <div class='text-info'><h4>".$nombrepagador."</h4></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Rut</label></div>
                                            <div class='text-info'><h4>".$rutpagador."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Relacion Parentesco</label></div>
                                            <div class='text-info'><h4>".$relacion."</h4></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id='grilla-3'>
                                    <div id='titulogrilla' class='text-center'><h4>ASEGURADOS DEPENDIENTES</h4></div>
                                    <div id='f1' class='form-row p-sm-2'>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Apellido Paterno</label></div>
                                            <div class='text-info'><h4>".$apellidopata."</h4></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Apellido Materno</label></div>
                                            <div class='text-info'><h4>".$apellidomata."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Nombres</label></div>
                                            <div class='text-info'><h4>".$nombrea."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Parentesco</label></div>
                                            <div class='text-info'><h4>".$parentescoa."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Fecha Naciiento</label></div>
                                            <div class='text-info'><h4>".$fechanaca."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Peso</label></div>
                                            <div class='text-info'><h4>".$pesoa."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Estatura</label></div>
                                            <div class='text-info'><h4>".$estaturaa."</h4></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Rut</label></div>
                                            <div class='text-info'><h4>".$ruta."</h4></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id='grilla-3'>
                                    <div id='titulogrilla' class='text-center'><h4>PRIMA</h4></div>
                                    <div id='f1' class='row justify-content-center'>
                                        <div id='r1' class='col'>
                                        <div class='text-info'><h4>".$prima." UF</h4></div>
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
                                                <div class='text-info'><h4>".$fechac."</h4></div>
                                                <div class=''><label> Responsable de pago </label></div>
                                                <div class='text-info'><h4>".$responsable."</h4></div>
                                                <div class=''><label> Direccion </label></div>
                                                <div class='text-info'><h4>".$direccioncacc."</h4></div>
                                                <div class=''><label> E-mail </label></div>
                                                <div class='text-info'><h4>".$emailcacc."</h4></div>
                                        </div>
                                        <div class='col'>
                                                <div class=''><label> Numero Solicitud </label></div>
                                                <div class='text-info'><h4>".$solicitudcacc."</h4></div>
                                                <div class=''><label> Rut </label></div>
                                                <div class='text-info'><h4>".$rutcacc."</h4></div>
                                                <div class=''><label> Comuna </label></div>
                                                <div class='text-info'><h4>".$comunacacc."</h4></div>
                                                <div class='row'>
                                                     <div class='col'>
                                                        <div class=''><label> Telefono </label></div>
                                                        <div class='text-info'><h4>".$telefono."</h4></div>
                                                    </div>
                                                    <div class='col'>
                                                        <div class=''><label> Celular </label></div>
                                                        <div class='text-info'><h4>".$celular."</h4></div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div><h4>DATOS INSCRITOS</h4></div>
                                    <div class='row'>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Paterno </label></div>
                                                <div class='text-info'><h4>".$apellidopatd."</h4></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Materno </label></div>
                                                <div class='text-info'><h4>".$apellidomatd."</h4></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Nombres </label></div>
                                                <div class='text-info'><h4>".$nombresd."</h4></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> RUT </label></div>
                                                <div class='text-info'><h4>".$rutd."</h4></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Fecha nacimiento </label></div>
                                                <div class='text-info'><h4>".$fechanacd."</h4></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Isapre </label></div>
                                                <div class='text-info'><h4>".$isapred."</h4></div>
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
                                        <div class='text-info'><h4>".$fechap."</h4></div>
                                        <div class='col'><label> N° IPP </label></div>
                                        <div class='text-info'><h4>".$ipp."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'><label>Nombre Contratante:</label> </div>
                                        <div class='text-info'><h4>".$nombrep."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'><label>Rut Contratante:</label></div>
                                        <div class='text-info'><h4>".$rutp."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                            <div class='col col-4'>
                                                <div class=''><label> Numero Propuestas </label></div>
                                                <div class='text-info'><h4>".$solicitudppp."</h4></div>
                                            </div>
                                            <div class='col col-4'>
                                                <div class=''><label> Valor prima $ </label></div>
                                                <div class='text-info'><h4>".$valorprimap."</h4></div>
                                            </div>
                                            <div class='col col-4'>
                                                <div class=''><label> Valor prima UF </label></div>
                                                <div class='text-info'><h4>".$valorprimauf."</h4></div>
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
                                            <div class='text-info'><h4>".$fechapac."</h4></div>
                                            <div class='col'>Nombre Titular: </div>
                                            <div class='text-info'><h4>".$titularcuenta."</h4></div>
                                            <div class='col'>Banco: </div>
                                            <div class='text-info'><h4>".$bancopac."</h4></div>
                                            <div class='col'>Sucursal: </div>
                                            <div class='text-info'><h4>".$sucursal."</h4></div>
                                        </div>
                                        <div class='col'>
                                            <div class='col'>Numero Cuenta: </div>
                                            <div class='text-info'><h4>".$numerocuenta."</h4></div>
                                            <div class='col'>Tipo: </div>
                                            <div class='text-info'><h4>".$tipo."</h4></div>
                                            <div class='col'>Rut Titular: </div>
                                            <div class='text-info'><h4>".$rutpac."</h4></div>
                                            <div class='col'>Llave de Cobranza: </div>
                                            <div class='text-info'><h4>".$llave."</h4></div>
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
                                        <div class='text-info'><h4>".$fechapat."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Fecha Vencimiento: </div>
                                        <div class='text-info'><h4>".$vencimiento."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Numero Tarjeta</div>
                                        <div class='text-info'><h4>".$numerotarjeta."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Empresa</div>
                                        <div class='text-info'><h4>".$empresa."</h4></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>ID de Cobro</div>
                                        <div class='text-info'><h4>".$idcobro."</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <a href='accion-clientes.php?value=4&value2=".$solicitud."' class='btn-warning btn' title='Actualizar'>Actualizar</a>         
            </form>
        </div>
        ";
      
    }
    function swhowc(){
        global $coneccion;
        switch ($_COOKIE['acces-user']){
            case 1:
                $sqlv= mysqli_query($coneccion, 'SELECT * FROM ventas ORDER BY solicitud ASC');
                break;
            case 2:
                $sqlv= mysqli_query($coneccion, 'SELECT * FROM ventas ORDER BY solicitud ASC');
                break;
            case 3:
                $equipo=$_COOKIE['team-user'];
                $sqlv=mysqli_prepare($coneccion, 'SELECT * FROM ventas WHERE equipo='.$_COOKIE['team-user'].' ORDER BY solicitud ASC');
                break;
            case 4:
                $rvendedor=$_COOKIE['data-user'];
                $sqlv= mysqli_prepare($coneccion, 'SELECT * FROM ventas WHERE rutv='.$_COOKIE['data-user'].' ORDER BY solicitud ASC');
                break;
        }
        echo ('
            <div class="container mt-3 ">
                <div class="row">
                    <div class="col-1">
                        Solicitud
                    </div>
                    <div class="col">
                        Fecha Envio
                    </div>
                    <div class="col-2">
                        Nombre
                    </div>
                    <div class="col">
                        Apellido Paterno
                    </div>
                    <div class="col">
                        Apellido Materno
                    </div>
                    <div class="col">
                        Prima UF
                    </div>
                    <div class="col">
                        Acciones
                    </div>
                </div>
            <br>
        ');
        $sql= $sqlv;
        while ($fila= mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            $numerosolicitud=$fila['solicitud'];$ventaequipo=$fila['equipo'];$rutvendedor=$fila['rutv'];
            switch ($_COOKIE['acces-user']){
                case 1:
                $sqli=mysqli_prepare($coneccion, 'SELECT * FROM incorporacion ORDER BY solicitud ASC');
                    break;
                case 2:
                $sqli=mysqli_prepare($coneccion, 'SELECT * FROM incorporacion ORDER BY solicitud ASC');
                    break;
                case 3:
                $param=$rutvendedor;
                $sqli=mysqli_prepare($coneccion, 'SELECT solicitud,fecharecepcion,apellidopat,apellidomat,nombres,prima FROM incorporacion WHERE solicitud='.$fila['rutv'].' ORDER BY solicitud ASC');
                    break;
                case 3:
                $param=$numerosolicitud;
                $sqli=mysqli_prepare($coneccion, 'SELECT solicitud,fecharecepcion,apellidopat,apellidomat,nombres,prima FROM incorporacion WHERE solicitud='.$fila['solicitud'].' ORDER BY solicitud ASC');
                    break;
            }
            echo $fila['solicitud'];
            $resi= $sqli;
            while ($row= mysqli_fetch_array($resi, MYSQLI_ASSOC)) {
            echo('
                <div class="row">
                    <div class="col-1">
                        '.$solicitud.'
                    </div>
                    <div class="col">
                        '.$fecharecepcion.'
                    </div>
                    <div class="col-2">
                        '.$nombres.'
                    </div>
                    <div class="col">
                        '.$apellidopat.'
                    </div>
                    <div class="col">
                        '.$apellidomat.'
                    </div>
                    <div class="col">
                        '.$prima.'
                    </div>
                    <div class="col">
                        <div class="btn-group">
                            '.$d.'
                            <a href="accion.php?value=&value2='.$fila['rut'].'" class="btn bg-success btn-sm" title="Ver">Ver</a>
                        </div>
                    </div>
                </div>
                <br>
                ');
            }
        }
    }
    function updatec($value2){

        global $coneccion;
        include 'botonera.php';
        $rutv=$_COOKIE['data-user'];

        $sqli= "SELECT * FROM incorporacion WHERE solicitud=?";
        $resi=  mysqli_prepare($coneccion, $sqli);
        mysqli_stmt_bind_param($resi, 'i', $value2);
        mysqli_stmt_execute($resi);
        mysqli_stmt_bind_result($resi, $solicitud,$cvi,$fecharecepcion,$fecha,$incorporacion,$rut,$apellidopat,$apellidomat,$nombres,
        $fechanac,$sexo,$estadocivil,$isapre,$actividad,$estatura,$peso,$direccion,$comuna,$ciudad,$telcom,$telpar,$telmov,$email,$banco,
        $tipocuenta,$ncuenta,$nombrepagador,$rutpagador,$relacion,$prima,$rutv,$equipo);
        while (mysqli_stmt_fetch($resi)){}

        $sqla= 'SELECT * FROM asegurablesdependientes WHERE solicitud=?';
        $resa=  mysqli_prepare($coneccion, $sqla);
        mysqli_stmt_bind_param($resa, 'i', $value2);
        mysqli_stmt_execute($resa);
        mysqli_stmt_bind_result($resa, $solicituda,$apellidopata,$apellidomata,$nombrea,$parentescoa,$fechanaca,$pesoa,$estaturaa,$ruta);
        while (mysqli_stmt_fetch($resa)){}

        $sqlc= 'SELECT * FROM cacc WHERE solicitud=?';
        $resc=  mysqli_prepare($coneccion, $sqlc);
        mysqli_stmt_bind_param($resc, 'i', $value2);
        mysqli_stmt_execute($resc);
        mysqli_stmt_bind_result($resc, $fechac,$solicitudcacc,$responsable,$rutcacc,$direccioncacc,$comunacacc,$emailcacc,$telefono,$celular);
        while (mysqli_stmt_fetch($resc)){}

        $sqld= 'SELECT * FROM datosinscritos WHERE solicitud=?';
        $resd=  mysqli_prepare($coneccion, $sqld);
        mysqli_stmt_bind_param($resd, 'i', $value2);
        mysqli_stmt_execute($resd);
        mysqli_stmt_bind_result($resd, $Solicitudd,$apellidopatd,$apellidomatd,$nombresd,$rutd,$fechanacd,$isapred);
        while (mysqli_stmt_fetch($resd)){}

        $sqlp= 'SELECT * FROM ppp WHERE solicitud=?';
        $resp=  mysqli_prepare($coneccion, $sqlp);
        mysqli_stmt_bind_param($resp, 'i', $value2);
        mysqli_stmt_execute($resp);
        mysqli_stmt_bind_result($resp, $ipp,$fechap,$nombrep,$rutp,$telefonop,$valoruf,$fechauf,$solicitudppp,$valorprimap,$valorprimauf);
        while (mysqli_stmt_fetch($resp)){}
        
        $sqlpac= 'SELECT * FROM pac WHERE solicitud=?';
        $respac=  mysqli_prepare($coneccion, $sqlpac);
        mysqli_stmt_bind_param($respac, 'i', $value2);
        mysqli_stmt_execute($respac);
        mysqli_stmt_bind_result($respac, $solicitudpac,$fechapac,$titularcuenta,$bancopac,$sucursal,$numerocuenta,$tipo,$rutpac,$llave);
        while (mysqli_stmt_fetch($respac)){}
        
        $sqlpat= 'SELECT * FROM pat WHERE solicitud=?';
        $respat=  mysqli_prepare($coneccion, $sqlpat);
        mysqli_stmt_bind_param($respat, 'i', $value2);
        mysqli_stmt_execute($respat);
        mysqli_stmt_bind_result($respat, $fechapat,$solicitudpat,$numerotarjeta,$vencimiento,$empresa,$bancopat,$nombretitular,$rutpat,$idcobro);
        while (mysqli_stmt_fetch($respat)){}
        
        $sqlv= 'SELECT * FROM ventas WHERE solicitud=?';
        $resv=  mysqli_prepare($coneccion, $sqlv);
        mysqli_stmt_bind_param($resv, 'i', $value2);
        mysqli_stmt_execute($resv);
        mysqli_stmt_bind_result($resv, $solicitudv,$rutv,$fechav,$primav,$equipo);
        while (mysqli_stmt_fetch($resv)){}

        $sqlv= 'SELECT * FROM estado WHERE solicitud=?';
        $resv=  mysqli_prepare($coneccion, $sqlv);
        mysqli_stmt_bind_param($resv, 'i', $value2);
        mysqli_stmt_execute($resv);
        mysqli_stmt_bind_result($resv, $solicitude,$llamado1,$dia1,$llamado2,$dia2,$estado,$motivo);
        while (mysqli_stmt_fetch($resv)){}
        echo "
            <div class='container mt-3'>
            <form action='update-client.php' method='post'>
                <div id='accordion'> 
                                <div class='container'>
                                    <div id='f1' class='row '>
                                        <h4>Solicitud N°: <input type='text' name='solicitud' value='".$solicitud."' disabled></h4>
                                        <input type='text' name='solicitud' value='".$value2."' disabled hidden>
                                    </div>
                                    <div id='f1' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''>Vendedor: </div>
                                            <div class=''><input type='text' name='rutv' value='".$rutv."'></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''>Equipo:</div>
                                            <div class=''><input type='text' name='equipo' value='".$equipo."' ></div>
                                        </div>
                                    </div>
                                    <div id='f1' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''>Fecha Venta:</div>
                                            <div class=''><input type='date' name='fecha' value='".$fecha."'></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''>Fecha Ingreso:</div>
                                            <div class=''><input type='datetime' name='dhingreso' value='".$fecharecepcion."' disabled></div>
                                        </div>
                                    </div>
                                    <div id='f1' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''>CVI:</div>
                                            <div class=''><input type='text' name='cvi' value='".$cvi."'></div>
                                        </div>
                                    </div>
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
                                            <div class=''><input type='text' name='rut' value='".$rut."'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Apellido Paterno</label></div>
                                            <div class=''><input type='text' name='apellidopat' value='".$apellidopat."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class='''><label>Apellido Materno</label></div>
                                            <div class=''><input type='text' name='apellidomat' value='".$apellidomat."'></div>
                                        </div>
                                        <div id='r4' class='col'>
                                            <div class=''><label>Nombres</label></div>
                                            <div class=''><input type='text' name='nombres' value='".$nombres."'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f2' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Fecha de nacimiento</label></div>
                                            <div class=''><input type='date' name='fechanac' value='".$fechanac."'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Sexo</label></div>
                                            <div class=''><input type='text' name='sexo' size='2' value='".$sexo."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Est. Civil</label></div>
                                            <div class=''><input type='text' name='estadocivil' size='2' value='".$estadocivil."'></div>
                                        </div>
                                        <div id='r4' class='col'>
                                            <div class=''><label>Inst de Salud Prev.</label></div>
                                            <div class=''><input type='text' name='isapre' value='".$isapre."'></div>
                                        </div>
                                        <div id='r5' class='col'>
                                            <div class=''><label>Actividad</label></div>
                                            <div class=''><input type='text' name='actividad' value='".$actividad."'></div>
                                        </div>
                                        <div id='r6' class='col'>
                                            <div class=''><label>Estatura</label></div>
                                            <div class=''><input type='text' name='estatura' size='2' value='".$estatura."'></div>
                                        </div>
                                        <div id='r7' class='col'>
                                            <div class=''><label>Peso</label></div>
                                            <div class=''><input type='text' name='peso' size='2' value='".$peso."'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f3' class='row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Direccion Particular</label></div>
                                            <div class=''><input type='text' name='direccion' size='50%' value='".$direccion."'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Comuna</label></div>
                                            <div class=''><input type='text' name='comuna' value='".$comuna."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Ciudad</label></div>
                                            <div class=''><input type='text' name='ciudad' value='".$ciudad."'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id='f4' class='form-row '>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Telefono Comercial</label></div>
                                            <div class=''><input type='text' name='telcom' value='".$telcom."'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Telefono Particular</label></div>
                                            <div class=''><input type='text' name='telpar' value='".$telpar."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Telefono Movil</label></div>
                                            <div class=''><input type='text' name='telmov' value='".$telmov."'></div>
                                        </div>
                                        <div id='r4' class='col' >
                                            <div class=''><label>E-Mail</label></div>
                                            <div class=''><input type='text' name='email' value='".$email."'></div>
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
                                            <div class=''><input type='text' name='banco' value='".$banco."'></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Tipo de Cuenta</label></div>
                                            <div class=''><input type='text' name='tipocuenta' value='".$tipocuenta."'></div>
                                        </div>
                                        <div id='r1' class='col'>
                                            <div class=''><label>N° Cuenta</label></div>
                                            <div class=''><input type='text' name='ncuenta' value='".$ncuenta."'></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id='grilla-2'>
                                    <div id='titulogrilla' class='text-center'><h4>PAGADOR</h4></div>
                                    <div id='f1' class='row'>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Nombre Pagador</label></div>
                                            <div class=''><input type='text' name='nombrepagador' value='".$nombrepagador."'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Rut</label></div>
                                            <div class=''><input type='text' name='rutpagador' value='".$rutpagador."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Relacion Parentesco</label></div>
                                            <div class=''><input type='text' name='relacion' value='".$relacion."'></div>
                                        </div>
                                    </div>
                                </div>
                                    <br>
                                <div id='grilla-3'>
                                    <div id='titulogrilla' class='text-center'><h4>ASEGURADOS DEPENDIENTES</h4></div>
                                    <div id='f1' class='form-row p-sm-2'>
                                        <div id='r1' class='col'>
                                            <div class=''><label>Apellido Paterno</label></div>
                                            <div class=''><input type='text' name='apellidopd' value='".$apellidopatd."'></div>
                                        </div>
                                        <div id='r2' class='col'>
                                            <div class=''><label>Apellido Materno</label></div>
                                            <div class=''><input type='text' name='apellidomd' value='".$apellidomatd."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Nombres</label></div>
                                            <div class=''><input type='text' name='nombresd' value='".$nombrea."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Parentesco</label></div>
                                            <div class=''><input type='text' name='parentescod' value='".$parentescoa."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Fecha Naciiento</label></div>
                                            <div class=''><input type='date' name='fechanacd' value='".$fechanacd."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Peso</label></div>
                                            <div class=''><input type='text' name='pesod' value='".$parentescoa."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Estatura</label></div>
                                            <div class=''><input type='text' name='estatura' value='".$estaturaa."'></div>
                                        </div>
                                        <div id='r3' class='col'>
                                            <div class=''><label>Rut</label></div>
                                            <div class=''><input type='text' name='rutd' value='".$ruta."'></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id='grilla-3'>
                                    <div id='titulogrilla' class='text-center'><h4>PRIMA</h4></div>
                                    <div id='f1' class='row justify-content-center'>
                                        <div id='r1' class='col'>
                                            <div class=''><input type='text' name='prima' value='".$prima."'></div>
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
                                                <div class=''><input type='date' name='fechacacc' value='".$fechac."'></div>
                                                <div class=''><label> Responsable de pago </label></div>
                                                <div class=''><input type='text' name='responsable'' value='".$responsable."></div>
                                                <div class=''><label> Direccion </label></div>
                                                <div class=''><input type='text' name='direccioncacc' value='".$direccioncacc."'></div>
                                                <div class=''><label> E-mail </label></div>
                                                <div class=''><input type='email' name='emailcacc' value='".$emailcacc."'></div>
                                        </div>
                                        <div class='col'>
                                                <div class=''><label> Numero Solicitud </label></div>
                                                <div class=''><input type='text' name='solicitudcacc' value='".$solicitudcacc."'></div>
                                                <div class=''><label> Rut </label></div>
                                                <div class=''><input type='text' name='rutcacc' value='".$rutcacc."'></div>
                                                <div class=''><label> Comuna </label></div>
                                                <div class=''><input type='text' name='comunacacc' value='".$comunacacc."'></div>
                                                <div class='row'>
                                                    <div class='col'>
                                                        <div class=''><label> Telefono </label></div>
                                                        <div class=''><input type='text' name='telefonocacc' value='".$telefono."'></div>
                                                    </div>
                                                    <div class='col'>
                                                        <div class=''><label> Celular </label></div>
                                                        <div class=''><input type='text' name='celularcacc' value='".$celular."'></div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div><h4>DATOS INSCRITOS</h4></div>
                                    <div class='row'>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Paterno </label></div>
                                                <div class=''><input type='text' name='apellidopatdi' value='".$apellidopatd."'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Materno </label></div>
                                                <div class=''><input type='text' name='apellidomatdi' value='".$apellidomatd."'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Nombres </label></div>
                                                <div class=''><input type='text' name='nombresdi' value='".$nombresd."'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> RUT </label></div>
                                                <div class=''><input type='text' name='rutdi' value='".$rutd."'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Fecha nacimiento </label></div>
                                                <div class=''><input type='date' name='fechanacdi' value='".$fechanacd."'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Isapre </label></div>
                                                <div class=''><input type='text' name='isapredi' size='10' value='".$isapred."'></div>
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
                                        <div class='col'>
                                                <div class=''><label> Fecha </label></div>
                                                <div class=''><input type='date' name='fechap' value='".$fechap."'></div>
                                            </div>
                                            <div class='col'>
                                                <div class=''><label> N° IPP </label></div>
                                                <div class=''><input type='text' name='ipp' value='".$ipp."'></div>
                                            </div>
                                        </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'><label>Nombre Contratante:</label> </div>
                                        <div class='col-2'><input type='text' name='nombrep' size='50%' value='".$nombrep."'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'><label>Rut Contratante:</label></div>
                                        <div class='col-2'><input type='text' name='rutp' size='50%' value='".$rutp."'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col'>
                                            <div class=''><label>Telefono:</label></div>
                                            <div class=''><input type='text' name='telefonoppp' size='35%' value='".$telefonop."'></div>
                                        </div>
                                        <div class='col'>
                                            <div class=''><label>Valor uf:</label></div>
                                            <div class=''><input type='text' name='valoruf' size='35%' value='".$valoruf."'></div>
                                        </div>
                                        <div class='col'>
                                            <div class=''><label>Fecha uf:</label></div>
                                            <div class=''><input type='date' name='fechauf' size='35%' value='".$fechauf."'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col col-4'>
                                            <div class=''><label> Numero Propuestas </label></div>
                                            <div class=''><input type='text' name='solicitudppp' size='35%' value='".$solicitudppp."'></div>
                                        </div>
                                        <div class='col col-4'>
                                            <div class=''><label> Valor prima $ </label></div>
                                            <div class=''><input type='text' name='valorprimap' size='35%' value='".$valorprimap."'></div>
                                        </div>
                                        <div class='col col-4'>
                                            <div class=''><label> Valor prima UF </label></div>
                                            <div class=''><input type='text' name='valorprimauf' size='35%' value='".$valorprimauf."'></div>
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
                                            <div class='col input-group'><input type='date' name='fechapac' value='".$fechapac."'></div>
                                            <div class='col'>Nombre Titular: </div>
                                            <div class='col input-group'><input type='text' name='titularcuenta' size='50%' value='".$titularcuenta."'></div>
                                            <div class='col'>Banco: </div>
                                            <div class='col'><input type='text' name='bancopac' size='50%' value='".$bancopac."'></div>
                                            <div class='col'>Sucursal: </div>
                                            <div class='col'><input type='text' name='sucursal' size='50%' value='".$sucursal."'></div>
                                        </div>
                                        <div class='col'>
                                            <div class='col'>Numero Cuenta: </div>
                                            <div class='col'><input type='text' name='numerocuentamcc' size='50%' value='".$numerocuenta."'></div>
                                            <div class='col'>Tipo: </div>
                                            <div class='btn-group col'>
                                                <select  name='tipo' class='custom-select' id='inputGroupSelect01'>
                                                    <option disabled selected>".$tipo."</option>
                                                    <option value='corriente' >Cuenta Corriente</option>
                                                    <option value='vista'>Cuenta Vista</option>
                                                </select>
                                            </div>
                                            <div class='col'>Rut Titular: </div>
                                            <div class='col'><input type='text' name='rutpac' size='50%' value='".$rutpac."'></div>
                                            <div class='col'>Llave de Cobranza: </div>
                                            <div class='col'><input type='text' name='llave' size='50%' value='".$llave."'></div>
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
                                        <div class='col-2'><input type='date' name='fechapat' value='".$fechapac."'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Fecha Vencimiento: </div>
                                        <div class='col-2'><input type='date' name='vencimiento' value='".$vencimiento."'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Numero Tarjeta</div>
                                        <div class='col-2'><input type='text' name='numerotarjeta' value='".$numerotarjeta."'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <input type='radio' name='empresa' value='visa' ".(($empresa=='visa')?'checked="checked"':"").">
                                        <div class='col'>VISA</div>
                                        <input type='radio' name='empresa' value='master card' ".(($empresa=='master card')?'checked="checked"':"").">
                                        <div class='col'>MASTER CARD</div>
                                        <input type='radio' name='empresa' value='diners' ".(($empresa=='dinerds')?'checked="checked"':"").">
                                        <div class='col'>DINERS</div>
                                        <input type='radio' name='empresa' value='magna' ".(($empresa=='magna')?'checked="checked"':"").">
                                        <div class='col'>MAGNA</div>
                                        <input type='radio' name='empresa' value='amex' ".(($empresa=='amex')?'checked="checked"':"").">
                                        <div class='col'>AMEX</div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col'>
                                            <div class='col'>Nombre Banco</div>
                                            <div class='col'><input type='text' name='bancot' size='50%' value='".$bancopat."'></div>
                                            <div class='col'>Nombre del titular/Mandante</div>
                                            <div class='col'><input type='text' name='nombret' size='50%' value='".$nombretitular."'></div>
                                        </div>
                                        <div class='col'>
                                            <div class='col'>Rut </div>
                                            <div class='col'><input type='text' name='rutt' size='50%' value='".$rutpat."'></div>
                                            <div class='col'>ID de Cobro</div>
                                            <div class='col'><input type='text' name='idcobro' size='50%' value='".$idcobro."'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class='card-header'>
                        <a class='card-link' data-toggle='collapse' href='#collapse6'>
                            ESTADO
                        </a>
                    </div>
                    <div id='collapse6' class='collapse' >
                        <div class='card-body list-group-item-primary'>
                            <div class='conteiner'>
                                <div class='row'>
                                    <div class='col'><h5>Llamado 1</h5></div>
                                </div>
                                <div class='form-row'>
                                    <div class='form-group col-md-6'>
                                        <label for'inputCity'>Respuesta</label>
                                        <input type='text' class='form-control' id='inputCity' name'llamado1'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='inputZip'>Dia</label>
                                        <input type='date' class='form-control' id='inputZip' name'dia1'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col'><h5>Llamado 2</h5></div>
                                </div>
                                <div class='form-row'>
                                    <div class='form-group col-md-6'>
                                        <label for'inputCity'>Respuesta</label>
                                        <input type='text' class='form-control' id='inputCity' name'llamado2'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='inputZip'>Dia</label>
                                        <input type='date' class='form-control' id='inputZip' name'dia2'>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col'><h5>Estado</h5></div>
                                </div>
                                <div class='form-row'>
                                    <div class='col-2'>
                                        <label for'inputCity'>Aprobado</label>
                                        <br>
                                        <div class='checkbox checkbox-primary'>
                                            <input type='radio' name='estado' class='styled'>
                                        </div>
                                    </div>
                                    <div class='col-2'>
                                            <label for'inputCity'>Rechazado</label>
                                            <br>
                                            <div class='checkbox checkbox-primary'>
                                                    <input type='radio' name='estado' class='styled' data-toggle='collapse' href='#collapse7'>
                                            </div>
                                    </div>
                                </div>
                                <div id='collapse7' class='collapse' data-parent='#accordion'>
                                    <div class='form-row'>
                                        <div class='form-group col-md-6'>
                                            <label for'inputCity'>Motivo</label>
                                            <input type='text' class='form-control' id='inputCity' name'motivo'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <input type='submit' class='btn btn-warning' name='enviar' value='Enviar'>
            </form>
        </div>
        ";
    }
    function insertc(){
        global $coneccion;
        include 'botonera.php';
        $rutv=$_COOKIE['data-user'];
        date_default_timezone_set('America/Santiago');
        $dhi=date ("d/m/20y \ H:si:s");
        echo "
            <div class='container mt-3'>
            <form action='insert-client.php' method='post'>
                <div id='accordion'> 
                                <div id='encabezado'>
                                    <h4>Solicitud N°: <input type='text' name='solicitud'></h4>
                                    Vendedor: <input type='text' name='rut' value='".$rutv."' disabled>
                                    Fecha Venta: <input type='date' name='fecha'>
                                    Fecha Ingreso: <input type='text' disabled name='dhingreso' value='".$dhi."'>
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
                                            <div class=''><input type='text' name='estatura'></div>
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
                                                <div class=''><input type='text' name='apellidopatdi'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Apellido Materno </label></div>
                                                <div class=''><input type='text' name='apellidomatdi'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Nombres </label></div>
                                                <div class=''><input type='text' name='nombresdi'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> RUT </label></div>
                                                <div class=''><input type='text' name='rutdi'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Fecha nacimiento </label></div>
                                                <div class=''><input type='date' name='fechanacdi'></div>
                                            </div>
                                            <div class='col col-lg-2'>
                                                <div class=''><label> Isapre </label></div>
                                                <div class=''><input type='text' name='isapredi' size='10'></div>
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
                                        <div class='col'>
                                                <div class=''><label> Fecha </label></div>
                                                <div class=''><input type='date' name='fechap'></div>
                                            </div>
                                            <div class='col'>
                                                <div class=''><label> N° IPP </label></div>
                                                <div class=''><input type='text' name='ipp'></div>
                                            </div>
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
                                        <div class='col'>
                                            <div class=''><label>Telefono:</label></div>
                                            <div class=''><input type='text' name='telefonoppp' size='35%'></div>
                                        </div>
                                        <div class='col'>
                                            <div class=''><label>Valor uf:</label></div>
                                            <div class=''><input type='text' name='valoruf' size='35%'></div>
                                        </div>
                                        <div class='col'>
                                            <div class=''><label>Fecha uf:</label></div>
                                            <div class=''><input type='date' name='fechauf' size='35%'></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col col-4'>
                                            <div class=''><label> Numero Propuestas </label></div>
                                            <div class=''><input type='text' name='solicitudppp' size='35%'></div>
                                        </div>
                                        <div class='col col-4'>
                                            <div class=''><label> Valor prima $ </label></div>
                                            <div class=''><input type='text' name='valorprimap' size='35%'></div>
                                        </div>
                                        <div class='col col-4'>
                                            <div class=''><label> Valor prima UF </label></div>
                                            <div class=''><input type='text' name='valorprimauf' size='35%'></div>
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
                                            <div class='col input-group'><input type='date' name='fechapac'></div>
                                            <div class='col'>Nombre Titular: </div>
                                            <div class='col input-group'><input type='text' name='titularcuenta' size='50%'></div>
                                            <div class='col'>Banco: </div>
                                            <div class='col'><input type='text' name='bancopac' size='50%'></div>
                                            <div class='col'>Sucursal: </div>
                                            <div class='col'><input type='text' name='sucursal' size='50%'></div>
                                        </div>
                                        <div class='col'>
                                            <div class='col'>Numero Cuenta: </div>
                                            <div class='col'><input type='text' name='numerocuentamcc' size='50%'></div>
                                            <div class='col'>Tipo: </div>
                                            <div class='btn-group col'>
                                                <select  name='tipo' class='custom-select' id='inputGroupSelect01'>
                                                    <option disabled selected>Tipo de Cuenta</option>
                                                    <option value='corriente' >Cuenta Corriente</option>
                                                    <option value='vista'>Cuenta Vista</option>
                                                </select>
                                            </div>
                                            <div class='col'>Rut Titular: </div>
                                            <div class='col'><input type='text' name='rutpac' size='50%'></div>
                                            <div class='col'>Llave de Cobranza: </div>
                                            <div class='col'><input type='text' name='llave' size='50%'></div>
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
                                        <div class='col-2'><input type='date' name='fechapat'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Fecha Vencimiento: </div>
                                        <div class='col-2'><input type='date' name='vencimiento'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col-2'>Numero Tarjeta</div>
                                        <div class='col-2'><input type='text' name='numerotarjeta'></div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <input type='radio' name='empresa' value='visa'>
                                        <div class='col'>VISA</div>
                                        <input type='radio' name='empresa' value='master card'>
                                        <div class='col'>MASTER CARD</div>
                                        <input type='radio' name='empresa' value='diners'>
                                        <div class='col'>DINERS</div>
                                        <input type='radio' name='empresa' value='magna'>
                                        <div class='col'>MAGNA</div>
                                        <input type='radio' name='empresa' value='amex'>
                                        <div class='col'>AMEX</div>
                                    </div>
                                    <br>
                                    <div class='row'>
                                        <div class='col'>
                                            <div class='col'>Nombre Banco</div>
                                            <div class='col'><input type='text' name='bancot' size='50%'></div>
                                            <div class='col'>Nombre del titular/Mandante</div>
                                            <div class='col'><input type='text' name='nombret' size='50%'></div>
                                        </div>
                                        <div class='col'>
                                            <div class='col'>Rut </div>
                                            <div class='col'><input type='text' name='rutt' size='50%'></div>
                                            <div class='col'>ID de Cobro</div>
                                            <div class='col'><input type='text' name='idcobro' size='50%'></div>
                                        </div>
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
