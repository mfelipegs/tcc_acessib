<?php
include "../conexao.php";

    $PontoA = $_REQUEST['PontoA'];
    $PontoB = $_REQUEST['PontoB'];

    $data=array();
    $q=mysqli_query($con,"SELECT * FROM Trajeto WHERE Ponto_A = '$PontoA' AND Ponto_B = '$PontoB'");
    while ($row=mysqli_fetch_object($q)){
    $data[]=$row;
    }
    echo json_encode($data);
?>