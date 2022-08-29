<?php
include "../conexao.php";
    $Email = $_POST['Usuario_Email'];
    $Senha = $_POST['Usuario_Senha'];

   if(isset($_POST['LoginUser']))
    {
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM Usuario WHERE Email = '$Email' AND Senha = '$Senha'"));
        if($login != 0)
            echo "success";
        else
            echo "error";
    }
    mysqli_close($con);
?>