<?php
  include("head.php");
  error_reporting(0);
  session_start();

  $id = $_GET['id'];

  $dados = mysqli_query($con, "SELECT * FROM Usuario WHERE ID_User = ". $_GET['id']);

  $exibe = mysqli_fetch_array($dados);
  $_SESSION["Hi"] = $exibe[4];
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Ver estabelecimentos cadastrados </title>
  <link rel="stylesheet" href="css/estab.css" media="screen">
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
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" <?php echo "href='ver_estab.php?id=".$id."'" ?> style="padding: 10px 20px;">Meus Estabelecimentos</a>
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
        
      <div class="u-form u-form-1">
        <div action="alterar/editar_perfil.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
              
        <h2 class="u-text u-text-1"> Seus estabelecimentos </h2>
          
              <?php
                $query = mysqli_query($con, "SELECT * FROM Estabelecimento Where ID_User =". $_GET['id']);

                $dados = mysqli_num_rows($query);

                if($dados != 0)
                {
              ?>

                <table border="0" width="700px">
                  <?php                   
                    while($exibe = mysqli_fetch_array($query))
                    { 
                  ?>

                    <tr height="70px">
                    <form action="#" method="POST" source="custom" name="form">
                        <td width="240px" valign="bottom" align="left"> 
                        <input type="hidden" id="estab_id" name="estab_id" value="<?php echo $exibe[0]; ?>">
                          <?php 
                            echo "<a href='editar_estab.php?ide=".$exibe[0]."&idu=".$id."'>". 
                              "<br><b>". $exibe[3] ."</b><br>". 
                              "<i>". $exibe[1] ."</i>";
                            echo "</a>"; 
                          ?> 
                        </td>
                        <td width="215px" valign="bottom" align="center">
                          <?php 
                            echo $exibe[7]; 
                            $ide = $exibe[0];
                          ?>
                        </td>
                        <td width="45px" valign="bottom" align="right">
                          <p><?php echo "<a href='comentarios.php?ide=".$exibe[0]."&id=".$id."' style='color: #000;'>"; ?><i class="far fa-comments fa-2x"></i></p><?php echo "</a>"; ?>
                          <?php echo "<a href='excluir/excluir-estab.php?ide=".$ide."&id=".$id."'>"; ?><b> <img src="images/icons/excluir.png"> </b></a>
                        </td>
                      </form>
                    </tr>
                  
                  <?php 
                    } 
                  ?>
                </table>

              <?php
              } else{
                  echo "<center>";
                  echo "Parece que você ainda não cadastrou nenhum estabelecimento.". "<br>";
                  echo "<a href='cadastro-de-estabelecimento.php?id=".$id."'>". "Cadastre um!" ."</a>";
                  echo "</center>";
                }
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>