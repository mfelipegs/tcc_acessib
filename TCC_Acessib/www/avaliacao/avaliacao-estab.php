<?php
include "../conexao.php";

    $Estab_ID = $_POST['estab_id'];
    $User_ID = $_POST['user_id'];

    $QtdRampas = $_POST['Estab_Rampas'];
    $QldRampas = $_POST['Estab_RampasQ'];
    
    $Portas = $_POST['Estab_Portas'];

    $QtdVagas = $_POST['Estab_Vagas'];
    $QldVagas = $_POST['Estab_VagasQ'];

    $Banheiros = $_POST['Estab_Banheiro'];

    $Coment = $_POST['Estab_Coment'];

    $Estrela = $_POST['Estrela'];

    $Data = date('Y-m-d');

    $insert = mysqli_query($con,"INSERT INTO Aval_Estabelecimento(ID_Estab, ID_User, Qtd_Rampas, Qld_Rampas, Portas, Qtd_Vagas, Qld_Vagas, Banheiros, Comentario, Data_Coment, Estrela) VALUES ('$Estab_ID', '$User_ID', '$QtdRampas', '$QldRampas', '$Portas', '$QtdVagas', '$QldVagas', '$Banheiros', '$Coment', '$Data', '$Estrela')");
    
    if($insert)
        echo "success";
    else
        echo "error";
            

    mysqli_close($con);
?>