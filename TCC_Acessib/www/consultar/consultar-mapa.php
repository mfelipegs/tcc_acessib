<?php
include "../conexao.php";
$data=array();

  $pesquisa = "SELECT * FROM Estabelecimento";

$q=mysqli_query($con, $pesquisa);
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>