<?php
    include "../conexao.php";

    echo $ida = $_GET['ida'];
    echo $idu = $_GET['idu'];
    echo $ide = $_GET['ide'];
    $q=mysqli_query($con,"DELETE FROM Aval_Estabelecimento WHERE ID_Aval_Estab = '$ida'");

    header("location:../aval_estab.php?idu=".$idu."&ide=".$ide);
 ?>