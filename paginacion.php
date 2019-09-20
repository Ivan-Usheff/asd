<html>
<head>
    <title>Paginacion</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>

</head>
<body class='bg-light'>
<?php
    include 'coneccion.php';
    include 'botonera.php';
        
    //value=''.date('Y-m-d H:i:s').''
    //value=''.$rutv.''
    $value=111115;
    
    $sqli= 'SELECT * FROM incorporacion WHERE solicitud=?';
    $resi=  mysqli_prepare($coneccion, $sqli);
    mysqli_stmt_bind_param($resi, 'i', $value);
    mysqli_stmt_execute($resi);
    mysqli_stmt_bind_result($resi, $solicitud,$cvi,$fecharecepcion,$fecha,$incorporacion,$rut,$apellidopat,$apellidomat,$nombres,
    $fechanac,$sexo,$estadocivil,$isapre,$actividad,$estatura,$peso,$direccion,$comuna,$ciudad,$telcom,$telpar,$telmov,$email,$banco,
    $tipocuenta,$ncuenta,$nombrepagador,$rutpagador,$relacion,$prima);
    while (mysqli_stmt_fetch($resi)){
    }
    $sqla= 'SELECT * FROM asegurablesdependientes WHERE solicitud=?';
    $resa=  mysqli_prepare($coneccion, $sqla);
    mysqli_stmt_bind_param($resa, 'i', $value);
    mysqli_stmt_execute($resa);
    mysqli_stmt_bind_result($resa, $solicituda,$apellidopata,$apellidomata,$nombrea,$parentescoa,$fechanaca,$pesoa,$estaturaa,$ruta);
    while (mysqli_stmt_fetch($resa)){
    }
    $sqlc= 'SELECT * FROM cacc WHERE solicitud=?';
    $resc=  mysqli_prepare($coneccion, $sqlc);
    mysqli_stmt_bind_param($resc, 'i', $value);
    mysqli_stmt_execute($resc);
    mysqli_stmt_bind_result($resc, $fechac,$solicitudcacc,$responsable,$rutcacc,$direccioncacc,$comunacacc,$emailcacc,$telefono,$celular);
    while (mysqli_stmt_fetch($resc)){
    }
    $sqld= 'SELECT * FROM datosinscritos WHERE solicitud=?';
    $resd=  mysqli_prepare($coneccion, $sqld);
    mysqli_stmt_bind_param($resd, 'i', $value);
    mysqli_stmt_execute($resd);
    mysqli_stmt_bind_result($resd, $Solicitudd,$apellidopatd,$apellidomatd,$nombresd,$rutd,$fechanacd,$isapred);
    while (mysqli_stmt_fetch($resd)){
    }
    $sqlp= 'SELECT * FROM ppp WHERE solicitud=?';
    $resp=  mysqli_prepare($coneccion, $sqlp);
    mysqli_stmt_bind_param($resp, 'i', $value);
    mysqli_stmt_execute($resp);
    mysqli_stmt_bind_result($resp, $ipp,$fechap,$nombrep,$rutp,$telefonop,$valoruf,$fehauf,$solicitudppp,$valorprimap,$valorprimauf);
    while (mysqli_stmt_fetch($resp)){
    }
    $sqlpac= 'SELECT * FROM pac WHERE solicitud=?';
    $respac=  mysqli_prepare($coneccion, $sqlpac);
    mysqli_stmt_bind_param($respac, 'i', $value);
    mysqli_stmt_execute($respac);
    mysqli_stmt_bind_result($respac, $solicitudpac,$fechapac,$titularcuenta,$bancopac,$sucursal,$numerocuenta,$tipo,$rutpac,$llave);
    while (mysqli_stmt_fetch($respac)){
    }
    $sqlpat= 'SELECT * FROM pat WHERE solicitud=?';
    $respat=  mysqli_prepare($coneccion, $sqlpat);
    mysqli_stmt_bind_param($respat, 'i', $value);
    mysqli_stmt_execute($respat);
    mysqli_stmt_bind_result($respat, $fechapat,$solicitudpat,$numerotarjeta,$vencimiento,$empresa,$bancopat,$nombretitular,$rutpat,$idcobro);
    while (mysqli_stmt_fetch($respat)){
    }
    $sqlv= 'SELECT * FROM ventas WHERE solicitud=?';
    $resv=  mysqli_prepare($coneccion, $sqlv);
    mysqli_stmt_bind_param($resv, 'i', $value);
    mysqli_stmt_execute($resv);
    mysqli_stmt_bind_result($resv, $solicitudv,$rutv,$fechav,$primav);
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
            <input type='submit' class='btn btn-primary' name='enviar' value='Agregar'>
        </form>
    </div>
    ";
        
?>
</body>
</html>
