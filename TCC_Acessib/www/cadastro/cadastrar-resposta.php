<?php
include "../conexao.php";

    $dono_id = $_POST['user_id'];
    $estab_id = $_POST['estab_id'];
    $cli_id = $_POST['cli_id'];
    $aval_id = $_POST['aval_id'];

    $resposta = $_POST['Resposta'];
	
    $Data = date('Y-m-d');
    
    $insert = mysqli_query($con, "INSERT INTO Resposta(ID_Estab, ID_Cliente, ID_Dono, ID_Aval, Resposta, DataR)
        VALUES('$estab_id', '$cli_id', '$dono_id', '$aval_id', '$resposta', '$Data')");
    if($insert)
        echo "success";
    else
        echo "error";
       

    mysqli_close($con);
?>