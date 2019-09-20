<html>
<head>
    <title>Agenda</title>
</head>
<?php
        include 'coneccion.php';
        include 'botonera.php';
        
        date_default_timezone_get('UTC');
        
        echo date('nnn');
        //cal_days_in_month($calendar, $month, $year)
        print_r(cal_info(0));
?>  
</html>
