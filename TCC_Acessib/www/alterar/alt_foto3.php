<?php
include "../conexao.php";

$ide = $_GET['ide'];
$foto = $_GET['foto'];
$arquivo = $_FILES['foto03'];

$filetype=$arquivo['type'];
if($filetype=='image/pjpeg' || $filetype=='image/PJPEG' || $filetype=='image/jpeg' || $filetype=='image/JPEG' || $filetype=='image/jpg' || $filetype=='image/png' || $filetype=='image/PNG' || $filetype=='image/gif' || $filetype=='image/GIF' || $filetype=='image/bmp' || $filetype=='image/BMP'){
    if ($arquivo['size']>1000000){
    exit('Arquivo muito grande. Tamanho máximo permitido 500kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  
    }
    $novonome = md5(mt_rand(1,10000).$arquivo['name']).'.jpg';
    $dir = "../cadastro/album/";
    if (!file_exists($dir)){
    mkdir($dir, 0755);  
    }
    $caminho = $dir.$novonome;

    echo unlink("../cadastro/album/'$foto'");

    $insere = mysqli_query($con, "UPDATE Estabelecimento SET Foto3 = '$novonome' WHERE ID_Estab = '$ide'");

    move_uploaded_file($_FILES['foto03']['tmp_name'],$caminho);
}       
mysqli_close($con); 
?>