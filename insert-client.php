<html>
<head>
    <title>Inicio</title>
</head>
<?php
    include 'coneccion.php';
    include 'botonera.php';

    $rutv=$_COOKIE['data-user'];

    if(isset($_POST['solicitud'])){$solicitud=$_POST['solicitud'];}
    //if(isset($_POST['rutv'])){$rutv=$_POST['rutv'];}
    if(isset($_POST['fecha'])){$fecha=$_POST['fecha'];}
    $dhingreso=date('Y-m-d H:i:s');
    //if(isset($_POST['dhingreso'])){$dhingreso=$_POST['dhingreso'];}
    
    //INCORPORACION
    if(isset($_POST['rut'])){$rut=$_POST['rut'];}
    if(isset($_POST['apellidopat'])){$apellidopat=$_POST['apellidopat'];}
    if(isset($_POST['apellidomat'])){$apellidomat=$_POST['apellidomat'];}
    if(isset($_POST['nombres'])){$nombres=$_POST['nombres'];}
    if(isset($_POST['fechanac'])){$fechanac=$_POST['fechanac'];}
    if(isset($_POST['sexo'])){$sexo=$_POST['sexo'];}
    if(isset($_POST['estadocivil'])){$estadocivil=$_POST['estadocivil'];}
    if(isset($_POST['isapre'])){$isapre=$_POST['isapre'];}
    if(isset($_POST['actividad'])){$actividad=$_POST['actividad'];}
    if(isset($_POST['estatura'])){$estatura=$_POST['estatura'];}
    if(isset($_POST['peso'])){$peso=$_POST['peso'];}
    if(isset($_POST['direccion'])){$direccion=$_POST['direccion'];}
    if(isset($_POST['comuna'])){$comuna=$_POST['comuna'];}
    if(isset($_POST['ciudad'])){$ciudad=$_POST['ciudad'];}
    if(isset($_POST['telcom'])){$telcom=$_POST['telcom'];}
    if(isset($_POST['telpar'])){$telpar=$_POST['telpar'];}
    if(isset($_POST['telmov'])){$telmov=$_POST['telmov'];}
    if(isset($_POST['email'])){$email=$_POST['email'];}
    if(isset($_POST['banco'])){$banco=$_POST['banco'];}
    if(isset($_POST['tipocuenta'])){$tipocuenta=$_POST['tipocuenta'];}
    if(isset($_POST['ncuenta'])){$ncuenta=$_POST['ncuenta'];}
    if(isset($_POST['nombrepagador'])){$nombrepagador=$_POST['nombrepagador'];}
    if(isset($_POST['rutpagador'])){$rutpagador=$_POST['rutpagador'];}
    if(isset($_POST['relacion'])){$relacion=$_POST['relacion'];}
    if(isset($_POST['prima'])){$prima=$_POST['prima'];}
    //ASEGURADOS DEPENDIENTES 
    if(isset($_POST['apellidopd'])){$apellidopd=$_POST['apellidopd'];}
    if(isset($_POST['apellidomd'])){$apellidomd=$_POST['apellidomd'];}
    if(isset($_POST['nombresd'])){$nombresd=$_POST['nombresd'];}
    if(isset($_POST['parentescod'])){$parentescod=$_POST['parentescod'];}
    if(isset($_POST['fechanacd'])){$fechanacd=$_POST['fechanacd'];}
    if(isset($_POST['pesod'])){$pesod=$_POST['pesod'];}
    if(isset($_POST['relaestaturaciond'])){$relaestaturaciond=$_POST['relaestaturaciond'];}
    if(isset($_POST['rutd'])){$rutd=$_POST['rutd'];}
    //ACCIDENTE COSTO CERO
    if(isset($_POST['fechacacc'])){$fechacacc=$_POST['fechacacc'];}
    if(isset($_POST['responsable'])){$responsable=$_POST['responsable'];}
    if(isset($_POST['direccioncacc'])){$direccioncacc=$_POST['direccioncacc'];}
    if(isset($_POST['emailcacc'])){$emailcacc=$_POST['emailcacc'];}
    if(isset($_POST['solicitudcacc'])){$solicitudcacc=$_POST['solicitudcacc'];}
    if(isset($_POST['rutcacc'])){$rutcacc=$_POST['rutcacc'];}
    if(isset($_POST['comunacacc'])){$comunacacc=$_POST['comunacacc'];}
    if(isset($_POST['telefonocacc'])){$telefonocacc=$_POST['telefonocacc'];}
    if(isset($_POST['celularcacc'])){$celularcacc=$_POST['celularcacc'];}
    //DATOS INSCRITOS
    if(isset($_POST['apellidopatd'])){$apellidopatd=$_POST['apellidopatd'];}
    if(isset($_POST['apellidomatd'])){$apellidomatd=$_POST['apellidomatd'];}
    if(isset($_POST['nombresd'])){$nombresd=$_POST['nombresd'];}
    if(isset($_POST['rutd'])){$rutd=$_POST['rutd'];}
    if(isset($_POST['fechanacd'])){$fechanacd=$_POST['fechanacd'];}
    if(isset($_POST['isapred'])){$isapred=$_POST['isapred'];}
    //PAGO PRIMERA PRIMA
    if(isset($_POST['fechap'])){$fechap=$_POST['fechap'];}
    if(isset($_POST['ipp'])){$ipp=$_POST['ipp'];}
    if(isset($_POST['nombrep'])){$nombrep=$_POST['nombrep'];}
    if(isset($_POST['rutp'])){$rutp=$_POST['rutp'];}
    if(isset($_POST['solicitudppp'])){$solicitudppp=$_POST['solicitudppp'];}
    if(isset($_POST['valorprimap'])){$valorprimap=$_POST['valorprimap'];}
    if(isset($_POST['valorprimauf'])){$valorprimauf=$_POST['valorprimauf'];}
    //MANDATO CUENTA CORRIENTE
    if(isset($_POST['fechapac'])){$fechapac=$_POST['fechapac'];}
    if(isset($_POST['titularcuenta'])){$titularcuenta=$_POST['titularcuenta'];}
    if(isset($_POST['bancopac'])){$bancopac=$_POST['bancopac'];}
    if(isset($_POST['rusucursaltp'])){$rsucursalutp=$_POST['sucursal'];}
    if(isset($_POST['numerocuenta'])){$numerocuenta=$_POST['numerocuenta'];}
    if(isset($_POST['tipo'])){$tipo=$_POST['tipo'];}
    if(isset($_POST['rutpac'])){$rutpac=$_POST['rutpac'];}
    if(isset($_POST['llave'])){$llave=$_POST['llave'];}
    //MANDATO TARJETA DE CREIDTO
    if(isset($_POST['fechapat'])){$fechapat=$_POST['fechapat'];}
    if(isset($_POST['vencimiento'])){$vencimiento=$_POST['vencimiento'];}
    if(isset($_POST['numerotarjeta'])){$numerotarjeta=$_POST['numerotarjeta'];}
    if(isset($_POST['empresa'])){$empresa=$_POST['empresa'];}
    if(isset($_POST['idcobro'])){$idcobro=$_POST['idcobro'];}

    $cvi='';
    $fecharecepcion='0001-01-01';
    $incorporacion='0';
    
    function incorporacion(){
        global $coneccion,$solicitud,$cvi,$fecharecepcion,$fecha,$incorporacion,$rut,$apellidopat,$apellidomat,$nombres,
        $fechanac,$sexo,$estadocivil,$isapre,$actividad,$estatura,$peso,$direccion,$comuna,$ciudad,$telcom,$telpar,
        $telmov,$email,$banco,$tipocuenta,$ncuenta,$nombrepagador,$rutpagador,$relacion,$prima;
        
        $query='INSERT INTO incorporacion ( solicitud, 
                                            cvi, 
                                            fecharecepcion, 
                                            fecha, 
                                            incorporacion, 
                                            rut, 
                                            apellidopat, 
                                            apellidomat, 
                                            nombres, 
                                            fechanac, 
                                            sexo,
                                            estadocivil, 
                                            isapre, 
                                            actividad, 
                                            estatura, 
                                            peso, 
                                            direccion, 
                                            comuna, 
                                            ciudad, 
                                            telcom, 
                                            telpar, 
                                            telmov, 
                                            email, 
                                            banco, 
                                            tipocuenta, 
                                            ncuenta, 
                                            nombrepagador, 
                                            rutpagador, 
                                            relacion, 
                                            prima) 
                                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)' or die('Problemas al cargar'.mysqli_error($coneccion));
        $insert=  mysqli_prepare($coneccion, $query);
        $ready=  mysqli_stmt_bind_param($insert,'issssissssssssddsssiiisssisisd',$solicitud,$cvi,$fecharecepcion,$fecha,$incorporacion,$rut,$apellidopat,$apellidomat,$nombres,$fechanac,
                                                                                $sexo,$estadocivil,$isapre,$actividad,$estatura,$peso,$direccion,$comuna,$ciudad,$telcom,$telpar,$telmov,$email,
                                                                                $banco,$tipocuenta,$ncuenta,$nombrepagador,$rutpagador,$relacion,$prima)
                                                                                or die('<h4>Problemas al cargar: '.mysqli_error($coneccion).'</h4>');
        $ready= mysqli_stmt_execute($insert)or die('<h4>Problemas al cargar: '.mysqli_error($coneccion).'</h4>');
        if($ready){dependientes();}else{echo 'Problemas al cargar'.mysqli_error($coneccion);}
    }
    function asegurablesdependientes(){
        global $coneccion,$solicitud,$apellidopd,$apellidomd,$nombresd,$parentescod,$fechanacd,$pesod,$relaestaturaciond,$rutd;
        $queryd='INSERT INTO asegurablesdependientes ( solicitud, apellidopat, apellidomat, nombre, parentesco, fehcanac, peso, estatura, rut) VALUES(?,?,?,?,?,?,?,?,?)' or die('Problemas al cargar'.mysqli_error($coneccion));
        $insertd=  mysqli_prepare($coneccion, $queryd);
        $readyd=  mysqli_stmt_bind_param($insertd,'isssssddi',
                                            $solicitud,
                                            $apellidopd,
                                            $apellidomd,
                                            $nombresd,
                                            $parentescod,
                                            $fechanacd,
                                            $pesod,
                                            $relaestaturaciond,
                                            $rutd)or die('<h4>Problemas al actualizar: '.mysqli_error($coneccion).'</h4>');
        $readyd= mysqli_stmt_execute($insertd);
        if($readyd){header('Location: paginacion.php');}else{echo 'Problemas al cargar'.mysqli_error($coneccion);}
    }
    function buscarsolicitud(){
        global $coneccion,$solicitud,$rut;
        $cargar=false;
        $query='SELECT solicitud, rut FROM incorporacion WHERE solicitud=?';
        $res=  mysqli_prepare($coneccion, $query);
        $boolean= mysqli_stmt_bind_param($res, 'i', $solicitud);
        $boolean= mysqli_stmt_execute($res);
        if($boolean){
            $boolean=  mysqli_stmt_bind_result($res, $ressolicitud, $resrut);
            while(mysqli_stmt_fetch($res)){
                $cargar=true;
                if($solicitud==$ressolicitud){
                    echo 'La solicitud: '.$solicitud.' ya se ingreso.';
                    echo '<a href='paginacion.php'>Volver</a>';
                    if($rut==$resrut){
                        echo 'El rut: '.$rut.' ya se ingreso.<br>';
                        echo '<a href='paginacion.php'>Volver</a>';
                    }
                }
            }
            //buscarrut();
            if(!$cargar){echo 'No se encontro el numero de solicitud, se puede cargar.<br>';buscarrut();}
        }
    }
    function buscarrut(){
        global $coneccion,$rut;
        $cargar=false;
        $query='SELECT rut FROM incorporacion WHERE rut=?';
        $res=  mysqli_prepare($coneccion, $query);
        $boolean= mysqli_stmt_bind_param($res, 'i', $rut);
        $boolean= mysqli_stmt_execute($res);
        if($boolean){
            $boolean=  mysqli_stmt_bind_result($res, $resrut);
            while(mysqli_stmt_fetch($res)){
                $cargar=true;
                if($rut==$resrut){
                    echo 'El rut: '.$rut.' ya se ingreso.(mensaje desde el rut)<br>';
                    echo '<a href='paginacion.php'>Volver</a>';
                }
            }
            //
            if(!$cargar){echo 'No se ingreso el rut a la base de datos con esa solicitud.<br>';incorporacion();}
        }
    }
    function dependientes(){
        global $coneccion,$solicitud,$rut;
        if ($rut!=0 || $rut!=''){
            asegurablesdependientes();
        }else{header('Location: paginacion.php');}
    }

    buscarsolicitud();


?>
</html>