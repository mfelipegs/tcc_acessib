<?php
    include("../conexao.php");

    $Aval_ID = $_POST['aval_id'];

    $QtdRampas = $_POST['Estab_Rampas'];
    $QldRampas = $_POST['Estab_RampasQ'];
    
    $Portas = $_POST['Estab_Portas'];

    $QtdVagas = $_POST['Estab_Vagas'];
    $QldVagas = $_POST['Estab_VagasQ'];

    $Banheiros = $_POST['Estab_Banheiro'];

    $Coment = $_POST['Estab_Coment'];

    $Estrela = $_POST['Estrela'];

    $Data = date('Y-m-d');

    $q = mysqli_query($con, "UPDATE Aval_Estabelecimento SET Qtd_Rampas = '$QtdRampas', Qld_Rampas = '$QldRampas', Portas = '$Portas', Qtd_Vagas = '$QtdVagas', 
    Qld_Vagas = '$QldVagas', Banheiros = '$Banheiros', Comentario = '$Coment', Data_Coment = '$Data', Estrela = '$Estrela' WHERE ID_Aval_Estab = '$Aval_ID'");
    
    if($q)
        echo "success";
    else
        echo "error";
?>