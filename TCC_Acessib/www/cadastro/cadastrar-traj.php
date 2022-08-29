<?php
include "../conexao.php";

    $PontoA = $_POST['Trajeto_PontoA'];
    $PontoB = $_POST['Trajeto_PontoB'];
    $CEP = $_POST['Trajeto_Cep'];

    if(isset($_POST['CadastrarTrajeto']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM Trajeto WHERE Ponto_A = '$PontoA' AND Ponto_B = '$PontoB'"));
        if($register == 0)
        {
            $insert = mysqli_query($con,"INSERT INTO Trajeto(Ponto_A, Ponto_B, CEP) VALUES ('$PontoA', '$PontoB', '$CEP')");
            if($insert)
                echo "success";
            else
                echo "error";
        }
        else if($register != 0)
            echo "exist";
    }

    mysqli_close($con);
?>