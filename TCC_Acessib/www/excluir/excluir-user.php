<?php
    include "../conexao.php";

    if(isset($_GET['Email']))
    {
    $Email = $_GET['Email'];
    $q=mysqli_query($con,"DELETE FROM Usuario where Email = '$Email'");
    if($q)
    echo "success";
    else
    echo "error";
    }
 ?>