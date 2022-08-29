<?php
  include("head.php");
  error_reporting(0);
  session_start();

  $id = $_GET['id'];
  $ide = $_GET['ide'];

  $dados = mysqli_query($con, "SELECT * FROM Usuario WHERE ID_User = ". $_GET['id']);

  $exibe = mysqli_fetch_array($dados);
  $_SESSION["Hi"] = $exibe[4];
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Comentários </title>
  <link rel="stylesheet" href="css/estab.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/aval_estab.js" defer=""></script>
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
  <section class="u-align-center u-clearfix u-section-1">
      <div class="u-clearfix u-sheet u-sheet-1">
             
        <h2 class="u-text u-text-1"> Comentários </h2>
         <?php
          $est = mysqli_query($con, "SELECT * FROM Estabelecimento WHERE ID_Estab = '$ide'");
          
          while($estabe = mysqli_fetch_array($est))
          {
            echo "<h5>". $estabe[3] ."</h5>";
          }
            echo "<center>";
            echo "<a href='ver_estab.php?id=".$id."'>" ."Ver estabelecimentos cadastrados". "</a>";
            echo "</center>";
          
          
                $query = mysqli_query($con, "SELECT * FROM Aval_Estabelecimento Where ID_Estab =". $_GET['ide']);

                $dados = mysqli_num_rows($query);

                if($dados != 0)
                {
              ?>

            <table border="0" width="280px">
            <?php
              $aval = mysqli_query($con, "SELECT * FROM Aval_Estabelecimento WHERE ID_Estab = '$ide' ORDER BY Data_Coment desc");
              while($a = mysqli_fetch_array($aval))
              {
                $us = mysqli_query($con, "SELECT * FROM Usuario Where ID_User = ". $a[2]);
                $user = mysqli_fetch_array($us);

                $ida = $a[0];
                $idc = $a[2];

            ?>
                <tr>
                  <td class="nome" width="180" align='left'>
                    <b> <?php echo $user[4] ?> </b>
                  </td>
                  <td width='100px' align="right" class="data"> <?php echo date("d", strtotime($a[10])) ."/". date("m", strtotime($a[10])) ."/". date("Y", strtotime($a[10])); ?> </td>
                </tr>
                <tr>
                  <td class="tp" colspan="2" align='left'>
                    <b> Rampas: </b> <?php echo $a[3]; if($a[3] == "Nenhuma"){echo " ";}else if($a[3] == "Não avaliado"){echo " ";}else if($a[3] == "Não é necessário"){echo " ";}else{echo " - ". $a[4]; } ?> <br>
                    <b> Portas: </b> <?php echo $a[5]; ?> <br>
                    <b> Vagas: </b> <?php echo $a[6]; if($a[6] == "Nenhuma"){ echo " ";}else if($a[6] == "Não sei"){echo " ";}else if($a[6] == "Não avaliado"){echo " ";}else{ echo " - ". $a[7]; } ?> <br>
                    <b> Banheiros acessíveis: </b> <?php echo $a[8]; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <textarea cols="40" readonly><?php echo $a[9] ?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <?php
                      if($a[11] == "0"){
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                      }
                      else if($a[11] == "1"){
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                      }
                      else if($a[11] == "2"){
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                      }
                      else if($a[11] == "3"){
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star0.png'>";
                        echo "<img src='images/star0.png'>";
                      }
                      else if($a[11] == "4"){
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star0.png'>";
                      } 
                      else if($a[11] == "5"){
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                        echo "<img src='images/star1.png'>";
                      }
                    ?>
                  </td>
                  <td align="right">
                    <?php echo "<a href='comentario.php?id=".$id."&ide=".$ide."&ida=".$ida."&idc=".$idc."'>";?> <i class="fas fa-reply" style="color: #000;"></i>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <hr>
                  </td>  
                </tr>
              <?php
                }
              ?>
            </table>

              <?php
              } else{
                  echo "<center>";
                  echo "Parece que ainda não há nenhuma avaliação.";
                  echo "</center>";
                }
              ?>
          </div>
        </div>
      </div>
    </section>

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>