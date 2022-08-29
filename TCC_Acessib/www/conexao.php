<?php
    header("Access-Control-Allow-Origin:*");
    date_default_timezone_set('America/Sao_Paulo');
    $con=mysqli_connect("localhost","root","","TCC_Acessib") or die("Não pode conectar");
    
    mysqli_set_charset($con,'UTF8');
?>