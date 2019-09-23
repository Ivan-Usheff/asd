<html>
<head>
    <title>Actualizar</title>
</head>
<?php
    include 'coneccion.php';
    include 'botonera.php';

    if(isset($_POST["solicitud"])){$solicitud=$_POST["solicitud"];}
    echo $_POST["solicitud"];
    if(isset($_POST["fecha"])){$fecha=$_POST["fecha"];}
    if(isset($_POST["cvi"])){$cvi=$_POST["cvi"];}
    if(isset($_POST["dhingreso"])){$fecharecepcion=$_POST["dhingreso"];}
    $incorporacion='0';
    //$dhingreso=date('Y-m-d H:i:s');
    if(isset($_POST['dhingreso'])){$dhingreso=$_POST['dhingreso'];}
    //INCORPORACION
    if(isset($_POST["rut"])){$rut=$_POST["rut"];}
    if(isset($_POST["apellidopat"])){$apellidopat=$_POST["apellidopat"];}
    if(isset($_POST["apellidomat"])){$apellidomat=$_POST["apellidomat"];}
    if(isset($_POST["nombres"])){$nombres=$_POST["nombres"];}
    if(isset($_POST["fechanac"])){$fechanac=$_POST["fechanac"];}
    if(isset($_POST["sexo"])){$sexo=$_POST["sexo"];}
    if(isset($_POST["estadocivil"])){$estadocivil=$_POST["estadocivil"];}
    if(isset($_POST["isapre"])){$isapre=$_POST["isapre"];}
    if(isset($_POST["actividad"])){$actividad=$_POST["actividad"];}
    if(isset($_POST["estatura"])){$estatura=$_POST["estatura"];}
    if(isset($_POST["peso"])){$peso=$_POST["peso"];}
    if(isset($_POST["direccion"])){$direccion=$_POST["direccion"];}
    if(isset($_POST["comuna"])){$comuna=$_POST["comuna"];}
    if(isset($_POST["ciudad"])){$ciudad=$_POST["ciudad"];}
    if(isset($_POST["telcom"])){$telcom=$_POST["telcom"];}
    if(isset($_POST["telpar"])){$telpar=$_POST["telpar"];}
    if(isset($_POST["telmov"])){$telmov=$_POST["telmov"];}
    if(isset($_POST["email"])){$email=$_POST["email"];}
    if(isset($_POST["banco"])){$banco=$_POST["banco"];}
    if(isset($_POST["tipocuenta"])){$tipocuenta=$_POST["tipocuenta"];}
    if(isset($_POST["ncuenta"])){$ncuenta=$_POST["ncuenta"];}
    if(isset($_POST["nombrepagador"])){$nombrepagador=$_POST["nombrepagador"];}
    if(isset($_POST["rutpagador"])){$rutpagador=$_POST["rutpagador"];}
    if(isset($_POST["relacion"])){$relacion=$_POST["relacion"];}
    if(isset($_POST["prima"])){$prima=$_POST["prima"];}
    if(isset($_POST["rutv"])){$rutv=$_POST["rutv"];}
    if(isset($_POST["equipo"])){$equipo=$_POST["equipo"];}
    //ASEGURADOS DEPENDIENTES 
    if(isset($_POST["apellidopd"])){$apellidopd=$_POST["apellidopd"];}
    if(isset($_POST["apellidomd"])){$apellidomd=$_POST["apellidomd"];}
    if(isset($_POST["nombresd"])){$nombresd=$_POST["nombresd"];}
    if(isset($_POST["parentescod"])){$parentescod=$_POST["parentescod"];}
    if(isset($_POST["fechanacd"])){$fechanacd=$_POST["fechanacd"];}
    if(isset($_POST["pesod"])){$pesod=$_POST["pesod"];}
    if(isset($_POST["estaturad"])){$estaturad=$_POST["estaturad"];}
    if(isset($_POST["rutd"])){$rutd=$_POST["rutd"];}
    //ACCIDENTE COSTO CERO
    if(isset($_POST["fechacacc"])){$fechacacc=$_POST["fechacacc"];}if($fechacacc=="dd/mm/aaaa"){$fechacacc="0001-01-01";}
    if(isset($_POST["solicitudcacc"])){$solicitudcacc=$_POST["solicitudcacc"];}
    if(isset($_POST["responsable"])){$responsable=$_POST["responsable"];}
    if(isset($_POST["rutcacc"])){$rutcacc=$_POST["rutcacc"];}
    if(isset($_POST["direccioncacc"])){$direccioncacc=$_POST["direccioncacc"];}
    if(isset($_POST["comunacacc"])){$comunacacc=$_POST["comunacacc"];}
    if(isset($_POST["emailcacc"])){$emailcacc=$_POST["emailcacc"];}
    if(isset($_POST["telefonocacc"])){$telefonocacc=$_POST["telefonocacc"];}
    if(isset($_POST["celularcacc"])){$celularcacc=$_POST["celularcacc"];}
    //DATOS INSCRITOS
    if(isset($_POST["apellidopatdi"])){$apellidopatdi=$_POST["apellidopatdi"];}
    if(isset($_POST["apellidomatdi"])){$apellidomatdi=$_POST["apellidomatdi"];}
    if(isset($_POST["nombresdi"])){$nombresdi=$_POST["nombresdi"];}
    if(isset($_POST["rutdi"])){$rutdi=$_POST["rutdi"];}
    if(isset($_POST["fechanacdi"])){$fechanacdi=$_POST["fechanacdi"];}
    if(isset($_POST["isapredi"])){$isapredi=$_POST["isapredi"];}
    //PAGO PRIMERA PRIMA
    if(isset($_POST["ipp"])){$ipp=$_POST["ipp"];}
    if(isset($_POST["fechap"])){$fechap=$_POST["fechap"];}if($fechap=="dd/mm/aaaa"){$fechap="0001-01-01";}
    if(isset($_POST["nombrep"])){$nombrep=$_POST["nombrep"];}
    if(isset($_POST["rutp"])){$rutp=$_POST["rutp"];}
    if(isset($_POST["telefonoppp"])){$telefonoppp=$_POST["telefonoppp"];}
    if(isset($_POST["valoruf"])){$valoruf=$_POST["valoruf"];}
    if(isset($_POST["fechauf"])){$fechauf=$_POST["fechauf"];}
    if(isset($_POST["valorprimap"])){$valorprimap=$_POST["valorprimap"];}
    if(isset($_POST["valorprimauf"])){$valorprimauf=$_POST["valorprimauf"];}
    //MANDATO CUENTA CORRIENTE
    if(isset($_POST["fechapac"])){$fechapac=$_POST["fechapac"];}if($fechapac=="dd/mm/aaaa"){$fechapac="0001-01-01";}
    if(isset($_POST["titularcuenta"])){$titularcuenta=$_POST["titularcuenta"];}
    if(isset($_POST["bancopac"])){$bancopac=$_POST["bancopac"];}
    if(isset($_POST["sucursal"])){$sucursal=$_POST["sucursal"];}
    if(isset($_POST["numerocuentamcc"])){$numerocuentamcc=$_POST["numerocuentamcc"];}
    if(isset($_POST["tipo"])){$tipo=$_POST["tipo"];}
    if(isset($_POST["rutpac"])){$rutpac=$_POST["rutpac"];}
    if(isset($_POST["llave"])){$llave=$_POST["llave"];}
    //MANDATO TARJETA DE CREIDTO
    if(isset($_POST["fechapat"])){$fechapat=$_POST["fechapat"];}if($fechapat=="dd/mm/aaaa"){$fechapat="0001-01-01";}
    if(isset($_POST["numerotarjeta"])){$numerotarjeta=$_POST["numerotarjeta"];}
    if(isset($_POST["vencimiento"])){$vencimiento=$_POST["vencimiento"];}
    if(isset($_POST["empresa"])){$empresa=$_POST["empresa"];}
    if(isset($_POST["bancot"])){$bancot=$_POST["bancot"];}
    if(isset($_POST["nombret"])){$nombret=$_POST["nombret"];}
    if(isset($_POST["rutt"])){$rutt=$_POST["rutt"];}
    if(isset($_POST["idcobro"])){$idcobro=$_POST["idcobro"];}
    //ESTADO
    if(isset($_POST["llamado1"])){$llamado1=$_POST["llamado1"];}
    if(isset($_POST["dia1"])){$dia1=$_POST["dia1"];}
    if(isset($_POST["llamado2"])){$llamado2=$_POST["llamado2"];}
    if(isset($_POST["dia2"])){$dia2=$_POST["dia2"];}
    if(isset($_POST["estado"])){$estado=$_POST["estado"];}
    if(isset($_POST["motivo"])){$motivo=$_POST["motivo"];}

    echo $solicitud;
    echo $fecharecepcion;
    /*
    $cons = "UPDATE incorporacion SET   cvi ='$cvi', fecharecepcion ='$fecharecepcion',
                                        fecha ='$apellidomat',
                                        incorporacion ='$incorporacion',
                                        rut ='$rut',
                                        apellidopat ='$apellidopat',
                                        apellidomat ='$apellidomat',
                                        nombres ='$nombres',
                                        fechanac ='$fechanac',
                                        sexo ='$sexo',
                                        estadocivil ='$estadocivil',
                                        isapre ='$isapre',
                                        actividad ='$actividad',
                                        estatura ='$estatura',
                                        peso ='$peso',
                                        direccion ='$direccion',
                                        comuna ='$comuna',
                                        ciudad ='$ciudad',
                                        telcom ='$telcom',
                                        telpar ='$telpar',
                                        telmov ='$telmov',
                                        email ='$email',
                                        banco ='$banco',
                                        tipocuenta ='$tipocuenta',
                                        ncuenta ='$ncuenta',
                                        nombrepagador ='$nombrepagador',
                                        rutpagador ='$rutpagador',
                                        relacion ='$relacion',
                                        prima ='$prima',
                                        rutv='$rutv',
                                        equipo='$equipo' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar INCORPORACION: '.mysqli_error($coneccion).'</h4>'); 
    */
    $cons = "UPDATE asegurablesdependientes SET apellidopat ='$apellidopd',
                                                apellidomat ='$apellidomat',
                                                nombre ='$nombresd',
                                                parentesco ='$parentescod',
                                                fechanac ='$fechanac',
                                                peso ='$peso',
                                                estatura ='$estatura',
                                                rut ='$rut' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar ASEGURABLES DEPENDIENTES: '.mysqli_error($coneccion).'</h4>');
    
    $cons = "UPDATE cacc SET fecha='$fecha',
                            responsable='$responsable',
                            rut='$rutcacc',
                            direccion='$direccioncacc',
                            comuna='$comunacacc',
                            email='$emailcacc',
                            telefono='$telefonocacc',
                            celular='$celularcacc' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar CONVENIO DE ACCIDENTES: '.mysqli_error($coneccion).'</h4>');
    
    $cons = "UPDATE datosinscritos SET apellidopat='$apellidopatdi',
                                        apellidomat='$apellidomatdi',
                                        nombres='$nombresdi',
                                        rut='$rutdi',
                                        fechanac='$fechanacdi',
                                        isapre='$isapredi' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar DATOS INSCRITOS: '.mysqli_error($coneccion).'</h4>');
    
    $cons = "UPDATE ppp SET ipp='$ipp',
                            fecha='$fechap',
                            nombre='$nombrep',
                            rut='$rutp',
                            telefono='$telefonoppp',
                            valoruf='$valoruf',
                            fechauf='$fechauf',
                            valorprimap='$valorprimap',
                            valorprimauf='$valorprimauf' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar PAGO PRIMERA PRIMA: '.mysqli_error($coneccion).'</h4>');
    
    $cons = "UPDATE pac SET fecha='$fechapac',
                            titularcuenta='$titularcuenta',
                            banco='$bancopac',
                            sucursal='$sucursal',
                            numerocuenta='$numerocuentamcc',
                            tipo='$tipo',
                            rut='$rutpac',
                            llave='$llave' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar PAGO AUTOMATICO CTA CTE: '.mysqli_error($coneccion).'</h4>');
    
    $cons = "UPDATE pat SET fecha='$fechapat',
                            numerotarjeta='$numerotarjeta',
                            vencimiento='$vencimiento',
                            empresa='$empresa',
                            banco='$bancot',
                            nombretitular='$nombret',
                            rut='$rutt',
                            idcobro='$idcobro' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar PAGO AUTOMATICO TJ: '.mysqli_error($coneccion).'</h4>');
    
    $cons = "UPDATE estado SET llamado1 ='$llamado1',
                                dia1 ='$dia1',
                                llamado2 ='$llamado2',
                                dia2 ='$dia2',
                                estado ='$estado',
                                motivo ='$motivo' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar ASEGURABLES DEPENDIENTES: '.mysqli_error($coneccion).'</h4>');

    $cons = "UPDATE ventas SET rutv ='$rutv',
                                fecha ='$fecha',
                                prima ='$prima',
                                equipo ='$equipo' WHERE solicitud='$solicitud'";
    $update = mysqli_query($coneccion, $cons) or die('<h4>Error al actualizar ASEGURABLES DEPENDIENTES: '.mysqli_error($coneccion).'</h4>');

    if(!$update){
        echo '<h4>Problemas al actualizar: '.mysqli_error($coneccion).'</h4>';
    }else{
        header('Location: clientes.php');
    }
?>
</html>