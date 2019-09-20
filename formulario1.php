<html>
<head class='bg-light'>
    <title>Inicio</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>

</head>
<?php
        include 'coneccion.php';
        include 'botonera.php';
        
        
?>  
<body class='bg-light'>
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
                                <div id='f1' class='form-row '>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label> Rut </label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='rut'></div>
                                    </div>
                                    <div id='r2' class='form-group d-block  px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Apellido Paterno</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='apellidopat'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Apellido Materno</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='apellidomat'></div>
                                    </div>
                                    <div id='r4' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Nombres</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='nombres'></div>
                                    </div>
                                </div>
                                <div id='f2' class='form-row '>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Fecha de nacimiento</label></div>
                                        <div class='d-block px-sm-0'><input type='date' name='fechanac'></div>
                                    </div>
                                    <div id='r2' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-0'><label>Sexo</label></div>
                                        <div class='d-block px-sm-0'><input type='text' name='sexo' size='2'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-0'><label>Est. Civil</label></div>
                                        <div class='d-block px-sm-0'><input type='text' name='estadocivil' size='2'></div>
                                    </div>
                                    <div id='r4' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Inst de Salud Prev.</label></div>
                                        <div class='d-block px-sm-0'><input type='text' name='isapre'></div>
                                    </div>
                                    <div id='r5' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Actividad</label></div>
                                        <div class='d-block px-sm-0'><input type='text' name='actividad'></div>
                                    </div>
                                    <div id='r6' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-0'><label>Estatura</label></div>
                                        <div class='d-block px-sm-0'><input type='text' name='estatura' size='2'></div>
                                    </div>
                                    <div id='r7' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-0'><label>Peso</label></div>
                                        <div class='d-block px-sm-0'><input type='text' name='peso' size='2'></div>
                                    </div>
                                </div>
                                <div id='f3' class='form-row '>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Direccion Particular</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='direccion' size='50%'></div>
                                    </div>
                                    <div id='r2' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Comuna</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='comuna'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Ciudad</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='ciudad'></div>
                                    </div>
                                </div>
                                <div id='f4' class='form-row '>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Telefono Comercial</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='telcom'></div>
                                    </div>
                                    <div id='r2' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Telefono Particular</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='telpar'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Telefono Movil</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='telmov'></div>
                                    </div>
                                    <div id='r4' class='form-group d-block px-sm-1 col' >
                                        <div class='d-block'><label>E-Mail</label></div>
                                        <div class='d-block'><input type='text' name='email'></div>
                                    </div>
                                </div>
                                <div id='f5' class='form-row '>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Datos cuentas Bancarias</label></div>
                                        <div class='d-block px-sm-1'><label></label></div>
                                    </div>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Banco</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='banco'></div>
                                    </div>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Tipo de Cuenta</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='tipocuenta'></div>
                                    </div>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>N° Cuenta</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='ncuenta'></div>
                                    </div>
                                </div>
                            </div>
                            <div id='grilla-2'>
                                <div id='titulogrilla' class='text-center'><h4>PAGADOR</h4></div>
                                <div id='f1' class='form-row'>
                                    <div id='r1' class='form-group d-block px-sm-3 col'>
                                        <div class='d-block px-sm-3'><label>Nombre Pagador</label></div>
                                        <div class='d-block px-sm-3'><input type='text' name='nombrepagador'></div>
                                    </div>
                                    <div id='r2' class='form-group d-block  px-sm-3 col'>
                                        <div class='d-block px-sm-3'><label>Rut</label></div>
                                        <div class='d-block px-sm-3'><input type='text' name='rutpagador'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-3 col'>
                                        <div class='d-block px-sm-3'><label>Relacion Parentesco</label></div>
                                        <div class='d-block px-sm-3'><input type='text' name='relacion'></div>
                                    </div>
                                </div>
                            </div>
                            <div id='grilla-3'>
                                <div id='titulogrilla' class='text-center'><h4>ASEGURADOS DEPENDIENTES</h4></div>
                                <div id='f1' class='form-row p-sm-2'>
                                    <div id='r1' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Apellido Paterno</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='apellidopd'></div>
                                    </div>
                                    <div id='r2' class='form-group d-block  px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Apellido Materno</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='apellidomd'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Nombres</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='nombresd'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Parentesco</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='parentescod'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Fecha Naciiento</label></div>
                                        <div class='d-block px-sm-1'><input type='date' name='fechanacd'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Peso</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='pesod'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Estatura</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='relaestaturaciond'></div>
                                    </div>
                                    <div id='r3' class='form-group d-block px-sm-1 col'>
                                        <div class='d-block px-sm-1'><label>Rut</label></div>
                                        <div class='d-block px-sm-1'><input type='text' name='rutd'></div>
                                    </div>
                                </div>
                            </div>
                            <div id='grilla-3'>
                                <div id='titulogrilla' class='text-center'><h4>PRIMA</h4></div>
                                <div id='f1' class='form-row p-sm-2 justify-content-center'>
                                    <div id='r1' class='form-group d-block px-sm-1 col '>
                                        <div class='d-block px-sm-1'><input type='text' name='prima'></div>
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
                                            <div class=''><input type='text' name='direccion'></div>
                                            <div class=''><label> E-mail </label></div>
                                            <div class=''><input type='email' name='emial'></div>
                                    </div>
                                    <div class='col'>
                                            <div class=''><label> Numero Solicitud </label></div>
                                            <div class=''><input type='text' name='solicitud'></div>
                                            <div class=''><label> Rut </label></div>
                                            <div class=''><input type='text' name='rut'></div>
                                            <div class=''><label> Comuna </label></div>
                                            <div class=''><input type='text' name='comuna'></div>
                                            <div class='row'>
                                                 <div class='col'>
                                                    <div class=''><label> Telefono </label></div>
                                                    <div class=''><input type='text' name='telefono'></div>
                                                </div>
                                                <div class='col'>
                                                    <div class=''><label> Celular </label></div>
                                                    <div class=''><input type='text' name='celular'></div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <div><h4>DATOS INSCRITOS</h4></div>
                                <div class='row'>
                                        <div class='col col-lg-2'>
                                            <div class=''><label> Apellido Paterno </label></div>
                                            <div class=''><input type='text' name='apellidopat'></div>
                                        </div>
                                        <div class='col col-lg-2'>
                                            <div class=''><label> Apellido Materno </label></div>
                                            <div class=''><input type='text' name='apellidomat'></div>
                                        </div>
                                        <div class='col col-lg-2'>
                                            <div class=''><label> Nombres </label></div>
                                            <div class=''><input type='text' name='nombres'></div>
                                        </div>
                                        <div class='col col-lg-2'>
                                            <div class=''><label> RUT </label></div>
                                            <div class=''><input type='text' name='rut'></div>
                                        </div>
                                        <div class='col col-lg-2'>
                                            <div class=''><label> Fecha nacimiento </label></div>
                                            <div class=''><input type='date' name='fchanac'></div>
                                        </div>
                                        <div class='col col-lg-2'>
                                            <div class=''><label> Isapre </label></div>
                                            <div class=''><input type='text' name='isapre' size='10'></div>
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
                                    <div class='col'><input type='date' name='fecha'></div>
                                    <div class='col'><label> N° IPP </label></div>
                                    <div class='col'><input type='text' name='ipp'></div>
                                </div>
                                <br>
                                <div class='row'>
                                    <div class='col-2'><label>Nombre Contratante:</label> </div>
                                    <div class='col-2'><input type='text' name='nombre' size='50%'></div>
                                </div>
                                <br>
                                <div class='row'>
                                    <div class='col-2'><label>Rut Contratante:</label></div>
                                    <div class='col-2'><input type='text' name='rut' size='50%'></div>
                                </div>
                                <br>
                                <div class='row'>
                                        <div class='col col-4'>
                                            <div class=''><label> Numero Propuestas </label></div>
                                            <div class=''><input type='text' name='solicitud' size='30%'></div>
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
                                        <div class='col input-group'><input type='date' name='fecha'></div>
                                        <div class='col'>Nombre Titular: </div>
                                        <div class='col input-group'><input type='text' name='titularcuenta'></div>
                                        <div class='col'>Banco: </div>
                                        <div class='col'><input type='text' name='titularcuenta'></div>
                                        <div class='col'>Sucursal: </div>
                                        <div class='col'><input type='text' name='sucursal'></div>
                                    </div>
                                    <div class='col'>
                                        <div class='col'>Numero Cuenta: </div>
                                        <div class='col'><input type='text' name='sucursal'></div>
                                        <div class='col'>Tipo: </div>
                                        <div class='btn-group col'>
                                            <select class='custom-select' id='inputGroupSelect01'>
                                                <option selected>Tipo de Cuenta</option>
                                                <option value='corriente'>Cuenta Corriente</option>
                                                <option value='vista'>Cuenta Vista</option>
                                            </select>
                                        </div>
                                        <div class='col'>Rut Titular: </div>
                                        <div class='col'><input type='text' name='rut'></div>
                                        <div class='col'>Llave de Cobranza: </div>
                                        <div class='col'><input type='text' name='rut'></div>
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
                                    <div class='col-2'><input type='date' name='fecha'></div>
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
                                    <input type='checkbox' aria-label='Checkbox for following text input' name='empresa' value='visa'>
                                    <div class='col'>VISA</div>
                                    <input type='checkbox' aria-label='Checkbox for following text input' name='empresa' value='master card'>
                                    <div class='col'>MASTER CARD</div>
                                    <input type='checkbox' aria-label='Checkbox for following text input' name='empresa' value='diners'>
                                    <div class='col'>DINERS</div>
                                    <input type='checkbox' aria-label='Checkbox for following text input' name='empresa' value='magna'>
                                    <div class='col'>MAGNA</div>
                                    <input type='checkbox' aria-label='Checkbox for following text input' name='empresa' value='amex'>
                                    <div class='col'>AMEX</div>
                                </div>
                                <br>
                                <div class='row'>
                                    <div class='col-2'>ID de Cobro</div>
                                    <div class='col-2'><input type='text' name='idcobro'></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <input type='submit' class='btn btn-primary' name='enviar' value='Agregar'>
        </form>
    </div>
</body>
</html>
