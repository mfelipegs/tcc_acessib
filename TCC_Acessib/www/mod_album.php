<?php
  include("head.php");
  error_reporting(0);
  session_start();

  $id = $_GET['id'];

  $dados = mysqli_query($con, "SELECT * FROM Usuario WHERE ID_User = ". $_GET['id']);

  $exibe = mysqli_fetch_array($dados);
  $_SESSION["Hi"] = $exibe[4];

  $e = mysqli_query($con, "SELECT * FROM Estabelecimento WHERE ID_Estab = ". $_GET['ide']);
  $es = mysqli_fetch_array($e);

  $ide = $_GET['ide'];
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Fotos do Estabelecimento </title>

  <link rel="stylesheet" href="css/estab.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/img_estab.js" defer=""></script>
</head>
  <body class="u-body">
    <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-1925">
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a style="padding: 60px 230px 5px 10px;" class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
            
            <div class="u-custom-menu u-nav-container">
              <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 16px;"></a>
                  </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" <?php echo "href='cadastro-de-estabelecimento.php?id=".$id."'" ?> style="padding: 10px 20px;">Cadastre um estabelecimento</a>
                  </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" href="cadastro-de-trajeto.html" style="padding: 10px 20px;">Cadastre um trajeto</a>
                  </li>
                <li class="u-nav-item"><a href="index.html" onclick="javascript:window.close()"><i class="fas fa-sign-out-alt"></i> Sair </a>
                  </li>
              </ul>
            </div>
            
            <div class="u-custom-menu u-nav-container-collapse">
              <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                  <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" <?php echo "href='restrito.php?id=".$id."'" ?> style="padding: 10px 20px;"><img src='images/acessib.png' class='u-logo-image u-logo-image-1' data-image-width='64'></a>
                      </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" <?php echo "href='cadastro-de-estabelecimento.php?id=".$id."'" ?> style="padding: 10px 20px;">Cadastre um estabelecimento</a>
                      </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="cadastro-de-trajeto.html" style="padding: 10px 20px;">Cadastre um trajeto</a>
                      </li>
                  </ul>
                  <div class="u-nav-item" style="top: 55%; left: 10%;"><a href="index.html" onclick="javascript:window.close()"><img src="images/sair.png"></a></div> 
                </div>
              </div>
  
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
          </nav>
  
          <?php
            echo "<a href='Perfil.php?id=".$exibe[0]."' class='u-border-0 u-btn u-btn-round u-button-style u-hover-palette-5-light-2 u-radius-50 u-text-palette-1-base u-white u-btn-1'>";
           
            echo "Olá, ". $_SESSION["Hi"];
     
            echo "</a>";
          ?>       
    </div>
  </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-899d">
      <div class="u-clearfix u-sheet u-sheet-1">
        
        <h2 class="u-text u-text-1"> Álbum do estabelecimento </h2>
        <h3><?php echo "<a href='editar_estab.php?idu=". $id ."&ide=". $ide ."'>". "Voltar ao perfil" ."</a>" ?></h3>
        
        <div class="u-form u-form-1">
          
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">  
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $id; ?>">
            <input type="hidden" id="estab_id" name="estab_id" value="<?php echo $ide; ?>">
            <input type="hidden" id="fotop" name="fotop" value="<?php echo $es[17]; ?>">
            <input type="hidden" id="foto1" name="foto1" value="<?php echo $es[18]; ?>">
            <input type="hidden" id="foto2" name="foto2" value="<?php echo $es[19]; ?>">
            <input type="hidden" id="foto3" name="foto3" value="<?php echo $es[20]; ?>">

            <h3> Perfil </h3>
            
            <input type="file" id="foto" accept=".png, .jpeg, .jpeg, .jpg"><br>

            <div class="u-form-group u-form-message" style="margin-bottom: 40px;">
              <table border="0" width="330px">
                <tr>
                  <td align="left">
                    <img id="fotop" src="<?php if($es[17] == null){ echo 'images/acessib.png'; }else{ echo 'cadastro/album/'.$es[17]; } ?>" style="width: 150px; height:150px; border: 1.5px #000 solid;">
                  </td>
                  <td align="right">
                    <img id="fotopo" src="<?php if($es[17] == null){ echo 'images/acessib.png'; }else{ echo 'cadastro/album/'.$es[17]; } ?>" style="border: 1.5px #000 solid; border-radius: 70%; width: 150px; height: 150px;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="u-align-left u-form-group u-form-submit">
                      <a id="altperfil" class="u-btn u-btn-submit u-button-style"> Salvar </a>
                      <button id="altperfil" onclick="perfil()" class="u-form-control-hidden">
                    </div>
                  </td>
                </tr>  
              </table>
            </div>

              <h3> Carrossel </h3>
              
              <div style="margin-bottom: 35px;">
                <input type="file" id="foto01" accept=".png, .jpeg, .jpeg, .jpg"><br>
                <img id="1foto" src="<?php if($es[18] == null){ echo 'images/acessib.png'; }else{ echo 'cadastro/album/'.$es[18]; } ?>" style="width: 150px; height:150px; border: 1.5px #000 solid;">
              
                <div class="u-align-left u-form-group u-form-submit">
                  <a id="foto1" class="u-btn u-btn-submit u-button-style"> Salvar </a>
                  <button id="foto1" onclick="altfoto1()" class="u-form-control-hidden">
                </div>
              </div>  

              <div style="margin-bottom: 35px;">
                <input type="file" id="foto02" accept=".png, .jpeg, .jpeg, .jpg"><br>
                <img id="2foto" src="<?php if($es[19] == null){ echo 'images/acessib.png'; }else{ echo 'cadastro/album/'.$es[19]; } ?>" style="width: 150px; height:150px; border: 1.5px #000 solid;">

                <div class="u-align-left u-form-group u-form-submit">
                  <a id="foto2" class="u-btn u-btn-submit u-button-style"> Salvar </a>
                  <button id="foto2" onclick="altfoto2()" class="u-form-control-hidden">
                </div>
              </div>

              <div>
                <input type="file" id="foto03" accept=".png, .jpeg, .jpeg, .jpg"><br>
                <img id="3foto" src="<?php if($es[20] == null){ echo 'images/acessib.png'; }else{ echo 'cadastro/album/'.$es[20]; } ?>" style="width: 150px; height:150px; border: 1.5px #000 solid;">

                <div class="u-align-left u-form-group u-form-submit">
                  <a id="foto3" class="u-btn u-btn-submit u-button-style"> Salvar </a>
                  <button id="foto3" onclick="altfoto3()" class="u-form-control-hidden">
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>