<?php
include "../conexao.php";

    //Login
    $Email = $_POST['Usuario_Email'];
    $Senha = $_POST['Usuario_Senha'];

    //Informações pessoais
    $Nome = $_POST['Usuario_Nome'];
	$Apelido = $_POST['Usuario_Apelido'];
    $Def = $_POST['Usuario_Def'];
    $Bio = $_POST['Usuario_Bio'];
	$Tel = $_POST['Usuario_Tel'];

    if(isset($_POST['CadastrarUser']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM Usuario WHERE Email = '$Email'"));
        if($register == 0)
        {
            $insert = mysqli_query($con, "INSERT INTO Usuario(Email, Senha, Nome, Apelido, Deficiencia, Biografia, Telefone) VALUES ('$Email', '$Senha', '$Nome', '$Apelido', '$Def', '$Bio', '$Tel')");
            if($insert)
                echo "success";
            else
                echo "error";
        } else if($register != 0){
            echo "exist";
        }
    }
        
    mysqli_close($con);
?>