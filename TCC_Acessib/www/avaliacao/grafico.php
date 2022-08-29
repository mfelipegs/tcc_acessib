<?php 

include("../conexao.php"); 


$ide = $_GET['ide'];
$idu = $_GET['idu'];

$q=mysqli_query($con,"SELECT count(Estrela) as Estrela FROM Aval_Estabelecimento WHERE ID_Estab = '$ide' Group by Estrela");

$data=array();
while ($row=mysqli_fetch_object($q)){
	$data[]=$row;
}

header("location:../aval_estab.php?ide='$ide'&idu='$idu'&data='$data'");
?>