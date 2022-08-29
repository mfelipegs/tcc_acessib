<?php
  include("head.php");
  
  $id = $_GET['id'];

  $query = mysqli_query($con, "SELECT * FROM Usuario WHERE ID_User =".$_GET['id']) or die(mysqli_error($con));
  $exibe = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Perfil pessoal </title>
  
  <script type="text/javascript">
    function atualizar(){     
      var user_id = $("#user_id").val();

      var Usuario_Email = $("#Usuario_Email").val();
      var Usuario_Senha = $("#Usuario_Senha").val();

      var Usuario_Nome = $("#Usuario_Nome").val();
      var Usuario_Apelido = $("#Usuario_Apelido").val();
      var Usuario_Def = $("#Usuario_Def").val();
      var Usuario_Bio = $("#Usuario_Bio").val();
      var Usuario_Tel = $("#Usuario_Tel").val();
    
      var dataString = "Usuario_Email=" + Usuario_Email + "&user_id=" + user_id + "&Usuario_Senha=" + Usuario_Senha + "&Usuario_Nome=" + Usuario_Nome + "&Usuario_Apelido=" + Usuario_Apelido + "&Usuario_Def=" + Usuario_Def + "&Usuario_Bio=" + Usuario_Bio + "&Usuario_Tel=" + Usuario_Tel + "&update=";	
      $.ajax({
        type: "POST",
        url: "http://localhost/TCC_Acessib/www/alterar/editar_perfil.php",
        data: dataString,
        crossDomain: true,
        cache: false,
        
        beforeSend: function() {
          $("#update").val('Conectando...');
          },
          success: function(data) {				
              if ($.trim(data) == "success") {
                  alert("Dados Atualizados com sucesso!");
                  $("#update").val("Alterar Dados");
              } else if (data == "error") {
                  alert("Algo deu errado, tente novamente.");
              }
          }
        });
            }
  </script>
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-1925">
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">

            <a style="padding: 60px 230px 15px 10px;" class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                  </symbol>
                </defs>
              </svg>
            </a>
          </div>
          
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item"> <?php echo "<a class='u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1' style='padding: 10px 10px;'></a>"; ?>
				        </li>
              <li class="u-nav-item"> <?php echo "<a class='u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1' href='cadastro-de-estabelecimento.php?id=".$id."' style='padding: 10px 10px;'>" ."Cadastre um estabelecimento". "</a>"; ?>
				        </li>
              <li class="u-nav-item"> <?php echo "<a class='u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1' href='cadastro-de-trajeto.php?id=".$id."' style='padding: 10px 10px;'>" ."Cadastre um trajeto". "</a>"; ?>
				        </li>
			      </ul>
          </div>

          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"> <?php echo "<a class='u-button-style u-nav-link' href='restrito.php?id=".$id."' style='padding: 10px 20px;'>" ."<img src='images/acessib.png' class='u-logo-image u-logo-image-1' data-image-width='64'>". "</a>"; ?>
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

        <a data-page-id="247969335"></a>       
  </div>
</header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-6fbd">
      <div class="u-clearfix u-sheet u-sheet-1">

        <h2 class="u-text u-text-1"> Seu perfil </h2>

        <div class="u-align-left u-form-group u-form-submit">
          <?php
            echo "<center>";
            echo "<a href='ver_estab.php?id=".$id."'>" ."Ver estabelecimentos cadastrados". "</a>";
            echo "</center>";
          ?>
        </div> 
        
        <div class="u-form u-form-1">

          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $_GET['id'] ?>">
          
            <div class="u-form-group u-form-name">
              <label for="Usuario_Nome" class="u-label"> Nome: </label>
              <input type="text" id="Usuario_Nome" name="Usuario_Nome" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $exibe[3] ?>" required="Preencha esse campo">
            </div>

            <div class="u-form-email u-form-group">
              <label for="Usuario_Email" class="u-label"> E-mail: </label>
              <input type="email" id="Usuario_Email" name="Usuario_Email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $exibe[7] ?>" required="Preencha esse campo">
            </div>
            
            <div class="u-form-group u-form-group-3">
              <label for="Usuario_Senha" class="u-label"> Senha: </label>
              <input type="text" id="Usuario_Senha" name="Usuario_Senha" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $exibe[2] ?>" required="Preencha esse campo">
            </div>

            <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-9">
              <label for="Usuario_Apelido" class="u-label"> Como devemos te chamar? </label>
              <input type="text" id="Usuario_Apelido" name="Usuario_Apelido" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $exibe[4] ?>" required="Preencha esse campo">
            </div>
            
            <div class="u-form-group u-form-partition-factor-2 u-form-group-10">
              <label for="Usuario_Num" class="u-label"> Telefone/Celular: </label>
              <input type="tel" id="Usuario_Tel" name="Usuario_Tel" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $exibe[1] ?>" required="Preencha esse campo" >
            </div>
            
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="Usuario_Def" class="u-label"> Possui alguma deficiência? </label>
              <div class="u-form-select-wrapper">
                <select id="Usuario_Def" name="Usuario_Def" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                <?php 
                  if($exibe[5] == " ")
                  {
                    echo "<option value='#' selected>" ."Selecione". "</option>";
                  }
                  else{
                    echo "<option value='#'>" ."Selecione". "</option>";
                  }
                  
                  if($exibe[5] == "Motora"){
                    echo "<option value='Motora' selected>" ."Sim, deficiência motora". "</option>";
                  }
                  else{
                    echo "<option value='Motora'>" ."Sim, deficiência motora". "</option>";
                  }

                  if($exibe[5] == "Sensorial"){
                    echo "<option value='Sensorial' selected>" ."Sim, deficiência sensorial". "</option>";
                  }
                  else{
                    echo "<option value='Sensorial'>" ."Sim, deficiência sensorial". "</option>";
                  }

                  if($exibe[5] == "Intelectual"){
                    echo "<option value='Intelectual' selected>" ."Sim, deficiência intelectual". "</option>";
                  }
                  else{
                    echo "<option value='Intelectual'>" ."Sim, deficiência intelectual". "</option>";
                  }
                  
                  if($exibe[5] == "Multipla")
                  {
                    echo "<option value='Multipla' selected>" ."Sim, deficiência múltipla". "</option>";
                  }
                  else{
                    echo "<option value='Multipla'>" ."Sim, deficiência múltipla". "</option>";
                  }
                  
                  if($exibe[5] == "Não")
                  {
                    echo "<option value='Não' selected>" ."Não possuo nenhuma deficiência". "</option>";
                  }
                  else{
                    echo "<option value='Não'>" ."Não possuo nenhuma deficiência". "</option>";
                  }
                ?>
                </select>
              </div>
            </div>
                        
            <div class="u-form-group u-form-message">
              <label for="Usuario_Bio" class="u-label"> Sobre você: (opcional) </label>
              <textarea id="Usuario_Bio" name="Usuario_Bio" rows="4" cols="50" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"><?php echo $exibe[6] ?></textarea>
            </div>

            <div class="u-align-left u-form-group u-form-submit">
              <button id="update" onclick="atualizar()" class="u-form-control-hidden"></button>
              <a id="update" class="u-btn u-btn-submit u-button-style"> Salvar alterações </a>
            </div>
          </form> 

            <!-- <div class="u-form-send-message u-form-send-success"> Você foi cadastrado! </div>
            <div class="u-form-send-error u-form-send-error"> Algo deu errado, confira as informações preenchidas. </div>
            <input type="hidden" value="" name="recaptchaResponse"> -->
             
        </div>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>