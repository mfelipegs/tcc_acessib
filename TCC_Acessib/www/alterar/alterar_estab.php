<?php
    include("../conexao.php");

    if(isset($_POST['update']))
    {
    $user_id = $_POST['user_id'];
    $estab_id = $_POST['estab_id'];

    $CNPJ = $_POST['Estab_Cnpj'];
    $Nome = $_POST['Estab_Nome'];
    
    $Num = $_POST['Estab_Num'];
    $Rua = $_POST['Estab_Rua'];
    $Bairro = $_POST['Estab_Bairro'];
    $Cidade = $_POST['Estab_Cidade'];
    $Uf = $_POST['Estab_Uf'];
    $Cep = $_POST['Estab_Cep'];
    
    $Horario = $_POST['Estab_Hora'];
    $Tel = $_POST['Estab_Tel'];
    $Tipo = $_POST['Estab_Tipo'];
    $Email = $_POST['Estab_Email'];
    
    $Acessib = $_POST['Acessib'];

    $Acessib_Bio = $_POST['Acessib_Bio'];

    $End = $_POST['Endereco'];

    $q = mysqli_query($con, "UPDATE Estabelecimento SET CNPJ = '$CNPJ', ID_User = '$user_id', Nome_Estab = '$Nome', Horario = '$Horario', 
    Telefone = '$Tel', Email = '$Email', Tipo = '$Tipo', CEP = '$Cep', Cidade = '$Cidade', 
    Estado = '$Uf', Bairro = '$Bairro', Rua = '$Rua', Num = '$Num', Endereco = '$End', Acessib = '$Acessib', Acessib_Bio = '$Acessib_Bio' WHERE ID_Estab = '$estab_id'");
    
    if($q)
        echo "success";
    else
        echo "error";
    }
?>