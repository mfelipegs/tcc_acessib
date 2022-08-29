<?php
include "../conexao.php";

    $user_id = $_POST['user_id'];

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
	
    if(isset($_POST['CadastrarEstab']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM Estabelecimento WHERE CNPJ = '$CNPJ'"));
        if($register == 0)
        {
			$insert = mysqli_query($con, "INSERT INTO 
				Estabelecimento(Endereco, CNPJ, ID_User, Email, Nome_Estab, Horario, Telefone, Tipo, CEP, Cidade, Estado, Bairro, Rua, Num, Acessib, Acessib_Bio)
				VALUES('$End', '$CNPJ', '$user_id', '$Email', '$Nome', '$Horario', '$Tel', '$Tipo', '$Cep', '$Cidade', '$Uf', '$Bairro', '$Rua', '$Num', '$Acessib', '$Acessib_Bio')");
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