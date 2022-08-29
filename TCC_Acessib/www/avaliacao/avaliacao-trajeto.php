<?php

//ainda não sabemos como guardar a avaliação geral(estrelas)

include "../conexao.php";

    $QtdRampas = $_POST['rampas'];
    $QldRampas = $_POST['rampas_qualidade'];

    $QtdVagas = $_POST['vagas'];
    $QldVagas = $_POST['vagas_qualidade'];

    $Calcadas = $_POST['calcadas'];

    $Ruas = $_POST['ruas'];

    if(isset($_POST['AvalTraj']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM Aval_Trajeto WHERE Ponto_A = '$PontoA' AND Ponto_B = '$PontoB'"));
        if($register == 0)
        {
            $insert = mysqli_query($con,"INSERT INTO Aval_Trajeto(Qtd_Rampas, Qld_Rampas, Qtd_Vagas, Qld_Vagas, Calcadas, Ruas) VALUES ('$QtdRampas', '$QldRampas', '$QtdVagas', '$QldVagas', '$Calcadas', '$Ruas')");
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