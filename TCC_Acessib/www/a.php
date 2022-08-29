<?php
    include("conexao.php");

    $Email = $_POST["Usuario_Email"];
    $Senha = $_POST["Usuario_Senha"];

    $dados = mysqli_query($con, "SELECT * FROM Usuario WHERE Email = '$Email' AND Senha = '$Senha'");
    $query = mysqli_num_rows($dados);

    if($query != 0)
    {
        $exibe = mysqli_fetch_array($dados);

        $id = $exibe[0];

        header("location:restrito.php?id=$id");
    }else{
?>

<html>
    <head>
        <title> Erro! </title>
    </head>
    <body>
        <center style="margin-top: 200px;">
            <div>
                <img src="images/acessib.png">
                <p style="font-size: 55px; color: #0F0C76;"> 
                    <b> Credenciais incorretas! </b><br>
                    <a href="Entrar.php" style="font-size: 40px;"> Tente novamente </a>
                </p>
            </div>
        </center>
    </body>
</html>

<?php
    }
?>