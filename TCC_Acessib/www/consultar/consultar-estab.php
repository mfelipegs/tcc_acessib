<?php
include "../conexao.php";

    $Estab = $_REQUEST['BuscaEstab'];

    $data=array();
    $q=mysqli_query($con,"SELECT * FROM Estabelecimento WHERE Nome_Estab = '$Estab' OR CNPJ = '$Estab'");
    while ($row=mysqli_fetch_object($q)){
    $data[]=$row;
    }
    echo json_encode($data);
?>