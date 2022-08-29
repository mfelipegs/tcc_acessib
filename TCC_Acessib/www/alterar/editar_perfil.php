<?php
    include("../conexao.php");

    if(isset($_POST['update']))
    {
        $id = $_POST["user_id"];

        $Email = $_POST['Usuario_Email'];
        $Senha = $_POST['Usuario_Senha'];

        $Nome = $_POST['Usuario_Nome'];
        $Apelido = $_POST['Usuario_Apelido'];
        $Def = $_POST['Usuario_Def'];
        $Bio = $_POST['Usuario_Bio'];

        $Tel = $_POST['Usuario_Tel'];

        $q = mysqli_query($con, "UPDATE Usuario SET Nome = '$Nome', Email = '$Email', Senha = '$Senha', Apelido = '$Apelido', 
        Deficiencia = '$Def', Biografia = '$Bio', Telefone = '$Tel' WHERE ID_User = '$id'");
    
        if($q)
            echo "success";
        else
            echo "error";
    }

    
?>