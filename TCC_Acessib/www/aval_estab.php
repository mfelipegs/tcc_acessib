<?php
  include("head.php");
  error_reporting(0);
  session_start();

  $dados = mysqli_query($con, "SELECT * FROM Estabelecimento WHERE ID_Estab = ". $_GET['ide']);

  $exibe = mysqli_fetch_array($dados);

  $id = $_GET['idu']; 
  $ide = $_GET['ide'];
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Avaliação de estabelecimento </title>
  
  <link rel="stylesheet" href="css/estab.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/aval_estab.js" defer=""></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
            echo "<a href='Perfil.php?id=".$id."' class='u-border-0 u-btn u-btn-round u-button-style u-hover-palette-5-light-2 u-radius-50 u-text-palette-1-base u-white u-btn-1'>";
           
            echo "Olá, ". $_SESSION["Hi"];
     
            echo "</a>";
          ?> 
    </div>
  </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-7e45">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Perfil do estabelecimento</h3>
        
        <div class="u-form u-form-1">
        <table border="0" width="300px">
            <tr>
              <td colspan=2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" style="height: 300px;" src="<?php if($exibe[17]){ echo "cadastro/album/". $exibe[17]; } else{ echo "images/acessibb.png"; }?>" alt="">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" style="height: 300px;" src="<?php if($exibe[18]){ echo "cadastro/album/". $exibe[18]; } else{ echo "images/acessibb.png"; }?>" alt="">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" style="height: 300px;" src="<?php if($exibe[19]){ echo "cadastro/album/". $exibe[19]; } else{ echo "images/acessibb.png"; }?>" alt="">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" style="height: 300px;" src="<?php if($exibe[20]){ echo "cadastro/album/". $exibe[20]; } else{ echo "images/acessibb.png"; }?>" alt="">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td align="left" valign="top" class="nome"><b> <?php echo $exibe[3] ?> </b></td>
              <td align="left" valign="top"> 
                <i class="fas fa-phone-alt"></i> <?php echo " +". $exibe[5] ?> <br>
                <i class="fas fa-envelope"></i><?php echo " ". $exibe[6] ?>
               </td>
            </tr>
            <tr>
              <td colspan="2" align="left"> 
                <p><b> Sobre o local: </b>
                <ul>
                  <?php
                    if(strpos($exibe[15], "1") !== false)
                    {
                      echo "<li>". "Rampas e/ou elevadores" ."</li>";
                    }
                    if(strpos($exibe[15], "2") !== false)
                    {
                      echo "<li>". "Piso tátil" ."</li>";
                    } 
                    if(strpos($exibe[15], "3") !== false)
                    {
                      echo "<li>". "Móveis adaptados" ."</li>";
                    }
                    if(strpos($exibe[15], "4") !== false)
                    {
                      echo "<li>". "Cômodos adaptados" ."</li>";
                    }
                    if(strpos($exibe[15], "5") !== false)
                    {
                      echo "<li>". "Intérprete de Libras" ."</li>";
                    }
                    if(strpos($exibe[15], "6") !== false)
                    {
                      echo "<li>". "Imagens autodescritivas" ."</li>";
                    }
                    if(strpos($exibe[15], "7") !== false)
                    {
                      echo "<li>". "Legendas" ."</li>";
                    }
                    if(strpos($exibe[15], "8") !== false)
                    {
                      echo "<li>". "Dublagem" ."</li>";
                    }
                    if(strpos($exibe[15], "9") !== false)
                    {
                      echo "<li>". "Impressões em Braille" ."</li>";
                    }
                  ?>
                </ul>
                <textarea rows="4" cols="42" readonly><?php echo $exibe[16] ?></textarea></p>
              <hr>
              
              <b class="tparte"> Avaliações: </b>
              </td>
            </tr>
          </table>

          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
          <input type="hidden" id="estab_id" name="estab_id" value="<?php echo $ide; ?>">
          <input type="hidden" id="user_id" name="user_id" value="<?php echo $id; ?>">
          
          <span id="mostrar"> </span>

          <div><span id="avali">
            <div class="u-form-group u-form-radiobutton u-form-group-1">
              <div class="u-form-radio-button-wrapper">  
              <i class="fas fa-wheelchair"></i>
				      <label for="text-fb58" class="u-label"><b> Rampas de acesso: </b></label><br>
                  <input type="radio" id="Estab_Rampas0" name="Estab_Rampas" value="Nenhuma">
                  <label class="u-label" for="radiobutton"> Não há nenhuma </label>
                <br>
                  <input type="radio" id="Estab_Rampas1" name="Estab_Rampas" value="Uma">
                  <label class="u-label" for="radiobutton"> Uma </label>
                <br>
                  <input type="radio" id="Estab_Rampas2" name="Estab_Rampas" value="Duas ou mais">
                  <label class="u-label" for="radiobutton"> Duas ou mais </label>
                <br>
                  <input type="radio" id="Estab_Rampas3" name="Estab_Rampas" value="Não é necessário">
                  <label class="u-label" for="radiobutton"> Não é necessário </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-2">
              <div class="u-form-radio-button-wrapper">
              <i class="fas fa-wheelchair"></i>
				      <label for="text-fb58" class="u-label"><b> Qualidade das rampas: </b></label><br>
                  <input type="radio" id="Estab_RampasQ1" name="Estab_RampasQ" value="Bom estado">
                  <label class="u-label" for="radiobutton"> Bom estado </label>
                <br>
                  <input type="radio" id="Estab_RampasQ2" name="Estab_RampasQ" value="Medianas">
                  <label class="u-label" for="radiobutton"> Medianas </label>
                <br>
                  <input type="radio" id="Estab_RampasQ3" name="Estab_RampasQ" value="Ruins">
                  <label class="u-label" for="radiobutton"> Ruins </label>
                <br>
                  <input type="radio" id="Estab_RampasQ4" name="Estab_RampasQ" value="Não sei">
                  <label class="u-label" for="radiobutton"> Não sei </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-3">
              <div class="u-form-radio-button-wrapper">
              <i class="fas fa-door-open"></i>
				      <label for="text-fb58" class="u-label"><b> Espaço entre as portas: </b></label><br>
                  <input type="radio" id="Estab_Portas1" name="Estab_Portas" value="Adequado">
                  <label class="u-label" for="radiobutton"> Adequado </label>
                <br>
                  <input type="radio" id="Estab_Portas2" name="Estab_Portas" value="Muito estreito">
                  <label class="u-label" for="radiobutton"> Muito estreito </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-4">
              <div class="u-form-radio-button-wrapper">
              <i class="fas fa-car"></i>
				      <label for="text-fb58" class="u-label"><b> Vagas de estacionamento para deficientes: </b></label><br>
                  <input type="radio" id="Estab_Vagas0" name="Estab_Vagas" value="Nenhuma">
                  <label class="u-label" for="radiobutton"> Nenhuma </label>
                <br>
                  <input type="radio" id="Estab_Vagas1" name="Estab_Vagas" value="Uma">
                  <label class="u-label" for="radiobutton"> Uma </label>
                <br>
                  <input type="radio" id="Estab_Vagas2" name="Estab_Vagas" value="Duas ou mais">
                  <label class="u-label" for="radiobutton"> Duas ou mais </label>
                <br>
                  <input type="radio" id="Estab_Vagas3" name="Estab_Vagas" value="Não sei">
                  <label class="u-label" for="radiobutton"> Não sei </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-5">
              <div class="u-form-radio-button-wrapper">
              <i class="fas fa-car"></i>
				      <label for="text-fb58" class="u-label"><b> Qualidade das vagas de estacionamento: </b></label><br>
                  <input type="radio" id="Estab_VagasQ1" name="Estab_VagasQ" value="Bom estado">
                  <label class="u-label" for="radiobutton"> Bom estado </label>
                <br>
                  <input type="radio" id="Estab_VagasQ2" name="Estab_VagasQ" value="Ruins, estão mal demarcadas e/ou estreitas">
                  <label class="u-label" for="radiobutton"> Ruins (estão mal demarcadas e/ou estreitas) </label>
                <br>
                  <input type="radio" id="Estab_VagasQ3" name="Estab_VagasQ" value="Não sei">
                  <label class="u-label" for="radiobutton"> Não sei </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-6">
              <div class="u-form-radio-button-wrapper">
              <i class="fas fa-restroom"></i>
				      <label for="text-fb58" class="u-label"><b> Banheiros acessíveis: </b></label><br>
                  <input type="radio" id="Estab_Banheiro1" name="Estab_Banheiro" value="Não há nenhum">
                  <label class="u-label" for="radiobutton"> Não há nenhum </label>
                <br>
                  <input type="radio" id="Estab_Banheiro2" name="Estab_Banheiro" value="Um">
                  <label class="u-label" for="radiobutton"> Um </label>
                <br>
                  <input type="radio" id="Estab_Banheiro3" name="Estab_Banheiro" value="Dois ou mais">
                  <label class="u-label" for="radiobutton"> Dois ou mais </label>
                <br>
                  <input type="radio" id="Estab_Banheiro4" name="Estab_Banheiro" value="Não sei">
                  <label class="u-label" for="radiobutton"> Não sei </label>
                </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-6">
              <div class="u-form-radio-button-wrapper">
              <i class="far fa-comments"></i>
				      <label for="text-fb58" class="u-label"><b> Fale um pouco mais: </b></label><br>
              <textarea rows="4" cols="35" id="Estab_Coment"></textarea><br>

                <div class="estrelas">
                  <input type="radio" id="vazio" name="estrela" value="" checked>
                  
                  <label for="Estrela_Um"><i class="fa"></i></label>
                  <input type="radio" id="Estrela_Um" name="estrela" value="1">
                  
                  <label for="Estrela_Dois"><i class="fa"></i></label>
                  <input type="radio" id="Estrela_Dois" name="estrela" value="2">
                  
                  <label for="Estrela_Tres"><i class="fa"></i></label>
                  <input type="radio" id="Estrela_Tres" name="estrela" value="3">
                  
                  <label for="Estrela_Quatro"><i class="fa"></i></label>
                  <input type="radio" id="Estrela_Quatro" name="estrela" value="4">
                  
                  <label for="Estrela_Cinco"><i class="fa"></i></label>
                  <input type="radio" id="Estrela_Cinco" name="estrela" value="5">
                </div>

              </div>
            </div>
            <input type="button" id="CadastrarAval" class="u-btn u-btn-submit u-button-style" value="Enviar">  
            <!-- <div class="u-form-send-message u-form-send-success"> Sucesso! </div>
            <div class="u-form-send-error u-form-send-message"> Erro. </div>
            <input type="hidden" value="" name="recaptchaResponse"> -->
            
          </span></div>
          <?php
            if($id != $exibe[2]){
          ?>
            <button onclick="mostrar()" class="btnm" id="mais"> Avaliar </button>

            <style>
              .btnm
              {
                border: solid 1px #000000;
                border-radius: 5px;
                background-color: #478ac9;
              }
            </style>
          <?php
            }
          ?>
        </form>
        </div>

          <table border="0" width="350px">
            <?php
              $aval = mysqli_query($con, "SELECT * FROM Aval_Estabelecimento WHERE ID_Estab = '$ide' ORDER BY Data_Coment desc");
              while($a = mysqli_fetch_array($aval))
              {
                $us = mysqli_query($con, "SELECT * FROM Usuario Where ID_User = ". $a[2]);
                $user = mysqli_fetch_array($us);

                $ida = $a[0];

            ?>
                <tr>
                  <td class="nome" align='left'>
                    <b> <?php echo $user[4] ?> </b>
                  </td>
                  <td width='100px' class="data"> <?php echo date("d", strtotime($a[10])) ."/". date("m", strtotime($a[10])) ."/". date("Y", strtotime($a[10])); ?> </td>
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
                    <textarea cols="42" readonly><?php echo $a[9] ?></textarea>
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
                  <?php
                    if($a[2] != $id)
                    {
                  ?>
                    <td align="right">
                      <?php echo "<a href='comentario.php?id=".$id."&ide=".$ide."&ida=".$ida."&idc=".$idc."'>";?> <i class="fas fa-reply" style="color: #000;"></i>
                    </td>
                  <?php
                    }
                  ?>
                </tr>
                <?php 
                  if($a[2] == $id)
                  {
                ?>
                  <tr>
                    <td align="left">
                        <?php
                          echo "<a href='editar_aval.php?ida=".$ida."&idu=".$id."'>" ."Editar". "</a>";
                        ?>
                    </td>  
                    <td align="right">
                      <?php
                        echo "<a href='excluir/excluir-aval.php?ida=".$ida."&idu=".$id."&ide=".$ide."'>". "Excluir" ."</a>";
                      ?>
                    </td>
                  </tr>
                <?php 
                  } 
                  
                  $query = mysqli_query($con, "SELECT * FROM Resposta Where ID_Aval =". $ida);

                  $dados = mysqli_num_rows($query);

                  if($dados != 0)
                  {
                ?>
                  <tr>
                    <td colspan="2" align="center">
                      <table width="300px" border="0">
                        <tr>
                          <?php
                            while($ava = mysqli_fetch_array($query))
                            {
                              $idr = $ava[0];
                          ?>
                          <td width="200px">
                          <i class="far fa-comments"></i><?php echo " ". "<b>". $exibe[3] ."</b>"; ?>
                          </td>
                          <td align="right" class="data">
                          <?php
                              echo date("d", strtotime($ava[6])) ."/". date("m", strtotime($ava[6])) ."/". date("Y", strtotime($ava[6]));
                          ?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <?php
                              echo $ava[5];
                            ?>
                          </td>  
                        </tr>
                        <?php
                          }
                        ?>
                      </table>
                    </td>
                  </tr>
                <?php 
                  } 
                ?>
                <tr>
                  <td colspan="2">
                    <hr>
                  </td>  
                </tr>
              <?php
                }
              ?>
            </table>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
  </body>
</html>