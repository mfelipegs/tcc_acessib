<?php
    include "../conexao.php";

    $idr = $_GET['idr'];
    $ide = $_GET['ide'];
    $id = $_GET['id'];
    $ida = $_GET['ida'];
    $q=mysqli_query($con,"DELETE FROM Resposta WHERE ID_Resp = '$idr'");

    header("location:../comentario.php?id=".$id."&ide=".$ide."&idr=".$idr."&ida=".$ida);
 ?>