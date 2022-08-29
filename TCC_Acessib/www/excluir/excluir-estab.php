<?php
 include "../conexao.php";
 
 $ide=$_GET['ide'];
 
 $a=mysqli_query($con,"DELETE FROM Aval_Estabelecimento WHERE ID_Estab = '$ide'");
 $q=mysqli_query($con,"DELETE FROM Estabelecimento WHERE ID_Estab = '$ide'");
 

 header("location:../ver_estab.php?id=". $_GET['id']);
 ?>