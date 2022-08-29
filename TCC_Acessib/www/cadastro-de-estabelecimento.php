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
  <title> Cadastro de estabelecimento </title>

  <link rel="stylesheet" href="css/estab.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/estab.js" defer=""></script>
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
        
        <h2 class="u-text u-text-1"> cadastrar estabelecimento </h2>
          <?php
            echo "<center>";
            echo "<a href='ver_estab.php?id=".$id."'>". "Ver estabelecimentos cadastrados" ."</a>";
            echo "</center>";
          ?>
        
        <div class="u-form u-form-1">
          
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">  
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $_GET['id'] ?>">

            <div class="u-form-group u-form-group-1">
              <label for="Estab_Nome" class="u-label"> Nome: </label>
              <input type="text" id="Estab_Nome" name="Estab_Nome" placeholder="Nome do estabelecimento" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>

            <div class="u-form-email u-form-group u-form-group-2">
              <label for="Estab_Email" class="u-label"> E-mail do estabelecimento: </label>
              <input type="email" id="Estab_Email" name="Estab_Email" placeholder="E-mail do estabelecimento ou responsável" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
            </div>
            
            <div class="u-form-group u-form-phone u-form-group-3">
              <label for="Estab_Tel" class="u-label"> Telefone: </label>
              <input type="tel" id="Estab_Tel" name="Estab_Tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Número de telefone (ex: +14155552675)" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="Estab_Cnpj" class="u-label"> CNPJ: </label>
              <input type="text" id="Estab_Cnpj" name="Estab_Cnpj" placeholder="XX. XXX. XXX/0001-XX"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
              <label for="Estab_Tipo" class="u-label">Tipo de estabelecimento:</label>
              <input type="text" id="Estab_Tipo" name="Estab_Tipo" placeholder="Ex: Restaurante, teatro, escola, etc." class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-group-6">
              <label for="Estab_Hora" class="u-label">Horário de funcionamento:</label>
              <input type="text" id="Estab_Hora" name="Estab_Hora"placeholder="Ex: De Segunda a Sexta das 07:00 às 21:00." class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-select u-form-group-7">
              <label for="Estab_Uf" class="u-label">Estado:</label>
              <div class="u-form-select-wrapper">
                <select id="Estab_Uf" name="Estab_Uf" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
                  <option value="#">Selecione</option>
                  <option value="AC">AC</option>
                  <option value="AL">AL</option>
                  <option value="AP">AP</option>
                  <option value="AM">AM</option>
                  <option value="BA">BA</option>
                  <option value="CE">CE</option>
                  <option value="DF">DF</option>
                  <option value="ES">ES</option>
                  <option value="GO">GO</option>
                  <option value="MA">MA</option>
                  <option value="MT">MT</option>
                  <option value="MS">MS</option>
                  <option value="MG">MG</option>
                  <option value="PA">PA</option>
                  <option value="PB">PB</option>
                  <option value="PR">PR</option>
                  <option value="PE">PE</option>
                  <option value="PI">PI</option>
                  <option value="RJ">RJ</option>
                  <option value="RN">RN</option>
                  <option value="RS">RS</option>
                  <option value="RO">RO</option>
                  <option value="RR">RR</option>
                  <option value="SC">SC</option>
                  <option value="SP">SP</option>
                  <option value="SE">SE</option>
                  <option value="TO">TO</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-8">
              <label for="Estab_Cep" class="u-label"> CEP: </label>
              <input type="text" id="Estab_Cep" name="Estab_Cep" placeholder="12345-000" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-9">
              <label for="Estab_Cidade" class="u-label"> Cidade: </label>
              <input type="text" id="Estab_Cidade" name="Estab_Cidade" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-group-10">
              <label for="Estab_Bairro" class="u-label"> Bairro: </label>
              <input type="text" id="Estab_Bairro" name="Estab_Bairro" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-11">
              <label for="Estab_Rua" class="u-label"> Rua: </label>
              <input type="text" id="Estab_Rua" name="Estab_Rua" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-12">
              <label for="Estab_Num" class="u-label"> Número: </label>
              <input type="text" id="Estab_Num" name="Estab_Num" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            

            <div class="u-form-group u-form-group-10">
              <label class="u-label"> Sobre a acessibilidade: </label><br>
            
              <label class="u-label"> Arquitetônica </label>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibA_Rampas" name="AcessibA_Rampas" value="1">
                <label for="AcessibA_Rampas" class="u-label"> Rampas e/ou elevadores (se necessários) </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibA_Piso" name="AcessibA_Piso" value="2">
                <label for="AcessibA_Piso" class="u-label"> Piso tátil </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibA_Moveis" name="AcessibA_Moveis" value="3">
                <label for="AcessibA_Moveis" class="u-label"> Móveis adaptados </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibA_Comodos" name="AcessibA_Comodos" value="4">
                <label for="AcessibA_Comodos" class="u-label"> Cômodos adaptados (banheiros, salas, etc.) </label>
              </div>

              <label class="u-label"> Comunicativa </label>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibC_Libras" name="AcessibC_Libras" value="5">
                <label for="AcessibC_Libras" class="u-label"> Intérprete de Libras </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibC_Img" name="AcessibC_Img" value="6"  >
                <label for="AcessibC_Img" class="u-label"> Imagens autodescritivas </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibC_Leg" name="AcessibC_Leg" value="7">
                <label for="AcessibC_Leg" class="u-label"> Legendas </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibC_Dub" name="AcessibC_Dub" value="8">
                <label for="AcessibC_Dub" class="u-label"> Dublagem </label>
              </div>
              <div class="u-form-checkbox u-form-group u-form-group-13">
                <input type="checkbox" id="AcessibC_Braille" name="AcessibC_Braille" value="9">
                <label for="AcessibC_Braille" class="u-label"> Impressões em Braille </label>
              </div><br>

              <div class="u-form-group u-form-message">
                <label for="Acessib_Bio" class="u-label"> Fale um pouco mais(opcional): </label>
                <textarea id="Acessib_Bio" name="Acessib_Bio" rows="4" cols="50" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
              </div>
            </div>

            <div class="u-align-left u-form-group u-form-submit">
              <a id="CadastrarEstab" class="u-btn u-btn-submit u-button-style"> Continuar </a>
              <button id="CadastrarEstab" class="u-form-control-hidden">
            </div>
          </form>
            
            <div class="u-form-send-message u-form-send-success"> Sucesso! </div>
            <div class="u-form-send-error u-form-send-message"> Erro. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </div>
        </div>
      </div>
    </section>

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>