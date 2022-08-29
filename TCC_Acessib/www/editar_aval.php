<?php
  include("head.php");
  error_reporting(0);
  session_start();

  $dados = mysqli_query($con, "SELECT * FROM Aval_Estabelecimento WHERE ID_Aval_Estab = ". $_GET['ida']);
  $exibe = mysqli_fetch_array($dados);

  $e = mysqli_query($con, "SELECT * FROM Estabelecimento WHERE ID_Estab = ". $exibe[1]);
  $es = mysqli_fetch_array($e);

  $id = $_GET['idu']; 
  $ida = $_GET['ida'];
  $ide = $es[0];
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Editar avaliação </title>
  
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
            echo "<a href='Perfil.php?id=".$id."' class='u-border-0 u-btn u-btn-round u-button-style u-hover-palette-5-light-2 u-radius-50 u-text-palette-1-base u-white u-btn-1'>";
           
            echo "Olá, ". $_SESSION["Hi"];
     
            echo "</a>";
          ?> 
    </div>
  </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-7e45">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Editar avaliação</h3>
        <h5><a <?php echo "href='aval_estab.php?ide=".$ide."&idu=".$id."'"; ?>> <?php echo $es[3];?> </a></h5>

          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
          <input type="hidden" id="aval_id" name="aval_id" value="<?php echo $ida; ?>">
          <input type="hidden" id="estab_id" name="estab_id" value="<?php echo $ide; ?>">
          <input type="hidden" id="user_id" name="user_id" value="<?php echo $id; ?>">

          <div>
            <div class="u-form-group u-form-radiobutton u-form-group-1">
              <div class="u-form-radio-button-wrapper">  
				      <label for="text-fb58" class="u-label"><b> Rampas de acesso: </b></label><br>
                  <input type="radio" id="Estab_Rampas0" name="Estab_Rampas" value="Nenhuma" <?php if($exibe[3] == "Nenhuma"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não há nenhuma </label>
                <br>
                  <input type="radio" id="Estab_Rampas1" name="Estab_Rampas" value="Uma" <?php if($exibe[3] == "Uma"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Uma </label>
                <br>
                  <input type="radio" id="Estab_Rampas2" name="Estab_Rampas" value="Duas ou mais" <?php if($exibe[3] == "Duas ou mais"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Duas ou mais </label>
                <br>
                  <input type="radio" id="Estab_Rampas3" name="Estab_Rampas" value="Não é necessário" <?php if($exibe[3] == "Não é necessário"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não é necessário </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-2">
              <div class="u-form-radio-button-wrapper">
				      <label for="text-fb58" class="u-label"><b> Qualidade das rampas: </b></label><br>
                  <input type="radio" id="Estab_RampasQ1" name="Estab_RampasQ" value="Bom estado" <?php if($exibe[4] == "Bom estado"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Bom estado </label>
                <br>
                  <input type="radio" id="Estab_RampasQ2" name="Estab_RampasQ" value="Medianas" <?php if($exibe[4] == "Medianas"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Medianas </label>
                <br>
                  <input type="radio" id="Estab_RampasQ3" name="Estab_RampasQ" value="Ruins" <?php if($exibe[4] == "Ruins"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Ruins </label>
                <br>
                  <input type="radio" id="Estab_RampasQ4" name="Estab_RampasQ" value="Não sei" <?php if($exibe[4] == "Não sei"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não sei </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-3">
              <div class="u-form-radio-button-wrapper">
				      <label for="text-fb58" class="u-label"><b> Espaço entre as portas: </b></label><br>
                  <input type="radio" id="Estab_Portas1" name="Estab_Portas" value="Adequado" <?php if($exibe[5] == "Adequado"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Adequado </label>
                <br>
                  <input type="radio" id="Estab_Portas2" name="Estab_Portas" value="Muito estreito" <?php if($exibe[5] == "Muito estreito"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Muito estreito </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-4">
              <div class="u-form-radio-button-wrapper">
				      <label for="text-fb58" class="u-label"><b> Vagas de estacionamento para pessoas com deficiência: </b></label><br>
                  <input type="radio" id="Estab_Vagas0" name="Estab_Vagas" value="Nenhuma" <?php if($exibe[6] == "Nenhuma"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Nenhuma </label>
                <br>
                  <input type="radio" id="Estab_Vagas1" name="Estab_Vagas" value="Uma" <?php if($exibe[6] == "Uma"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Uma </label>
                <br>
                  <input type="radio" id="Estab_Vagas2" name="Estab_Vagas" value="Duas ou mais" <?php if($exibe[6] == "Duas ou mais"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Duas ou mais </label>
                <br>
                  <input type="radio" id="Estab_Vagas3" name="Estab_Vagas" value="Não sei" <?php if($exibe[6] == "Não sei"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não sei </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-5">
              <div class="u-form-radio-button-wrapper">
				      <label for="text-fb58" class="u-label"><b> Qualidade das vagas de estacionamento: </b></label><br>
                  <input type="radio" id="Estab_VagasQ1" name="Estab_VagasQ" value="Bom estado" <?php if($exibe[7] == "Bom estado"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Bom estado </label>
                <br>
                  <input type="radio" id="Estab_VagasQ2" name="Estab_VagasQ" value="Ruins, estão mal demarcadas e/ou estreitas" <?php if($exibe[7] == "Ruins, estão mal demarcadas e/ou estreitas"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Ruins (estão mal demarcadas e/ou estreitas) </label>
                <br>
                  <input type="radio" id="Estab_VagasQ3" name="Estab_VagasQ" value="Não sei" <?php if($exibe[7] == "Não sei"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não sei </label>
              </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-6">
              <div class="u-form-radio-button-wrapper">
				      <label for="text-fb58" class="u-label"><b> Banheiros acessíveis: </b></label><br>
                  <input type="radio" id="Estab_Banheiro1" name="Estab_Banheiro" value="Não há nenhum" <?php if($exibe[8] == "Não há nenhum"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não há nenhum </label>
                <br>
                  <input type="radio" id="Estab_Banheiro2" name="Estab_Banheiro" value="Um" <?php if($exibe[8] == "Um"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Um </label>
                <br>
                  <input type="radio" id="Estab_Banheiro3" name="Estab_Banheiro" value="Dois ou mais" <?php if($exibe[8] == "Dois ou mais"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Dois ou mais </label>
                <br>
                  <input type="radio" id="Estab_Banheiro4" name="Estab_Banheiro" value="Não sei" <?php if($exibe[8] == "Não sei"){ echo "checked"; }?>>
                  <label class="u-label" for="radiobutton"> Não sei </label>
                </div>
            </div>

            <div class="u-form-group u-form-radiobutton u-form-group-6">
              <div class="u-form-radio-button-wrapper">
				      <label for="text-fb58" class="u-label"><b> Fale um pouco mais: </b></label><br>
              <textarea rows="4" cols="35" id="Estab_Coment"> <?php echo $exibe[9]; ?> </textarea><br>

              <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>
                
                <label for="Estrela_Um"><i class="fa"></i></label>
                <input type="radio" id="Estrela_Um" name="estrela" value="1" <?php if($exibe[11] == 1 OR $exibe[11] == 2 OR $exibe[11] == 3 OR $exibe[11] == 4 OR $exibe[11] == 5){ echo "checked"; } ?>>
                
                <label for="Estrela_Dois"><i class="fa"></i></label>
                <input type="radio" id="Estrela_Dois" name="estrela" value="2" <?php if($exibe[11] == 2 OR $exibe[11] == 3 OR $exibe[11] == 4 OR $exibe[11] == 5){ echo "checked"; } ?>>
                
                <label for="Estrela_Tres"><i class="fa"></i></label>
                <input type="radio" id="Estrela_Tres" name="estrela" value="3" <?php if($exibe[11] == 3 OR $exibe[11] == 4 OR $exibe[11] == 5){ echo "checked"; } ?>>
                
                <label for="Estrela_Quatro"><i class="fa"></i></label>
                <input type="radio" id="Estrela_Quatro" name="estrela" value="4" <?php if($exibe[11] == 4 OR $exibe[11] == 5){ echo "checked"; } ?>>
                
                <label for="Estrela_Cinco"><i class="fa"></i></label>
                <input type="radio" id="Estrela_Cinco" name="estrela" value="5" <?php if($exibe[11] == 5){ echo "checked"; } ?>>
              </div>

              </div>
            </div>
            <input type="button" id="UpdateAval" class="u-btn u-btn-submit u-button-style" value="Salvar"> 
          </div>
        </form>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
  </body>
</html>