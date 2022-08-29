<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Cadastro">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <meta name="generator" content="Nicepage 3.11.0, nicepage.com">
    <meta property="og:title" content="Cadastro">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:url" content="index.html">

      <script type="application/ld+json">
      {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "url": "index.html",
      "logo": "images/default-logo.png"
      }
      </script>
    
    <title> Cadastro </title>

    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Cadastro.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="canonical" href="index.html">

    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/jquery.mobile-1.4.5.min.js" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $("#CadastrarUser").click(function() {
              var Usuario_Email = $("#Usuario_Email").val();
              var Usuario_Senha = $("#Usuario_Senha").val();

              var Usuario_Nome = $("#Usuario_Nome").val();
              var Usuario_Def = $("#Usuario_Def").val();
              var Usuario_Bio = $("#Usuario_Bio").val();
              var Usuario_Tel = $("#Usuario_Tel").val();

              var Usuario_Num = $("#Usuario_Num").val();
              var Usuario_Rua = $("#Usuario_Rua").val();
              var Usuario_Bairro = $("#Usuario_Bairro").val();
              var Usuario_Muni = $("#Usuario_Muni").val();
              var Usuario_Uf = $("#Usuario_Uf").val();
        		
              var dataString = "Usuario_Email=" + Usuario_Email + "&Usuario_Senha=" + Usuario_Senha + "&Usuario_Nome=" + Usuario_Nome + "&Usuario_Def=" + Usuario_Def + "&Usuario_Bio=" + Usuario_Bio + "&Usuario_Tel=" + Usuario_Tel + "&Usuario_Num=" + Usuario_Num +  "&Usuario_Rua=" + Usuario_Rua + "&Usuario_Bairro=" + Usuario_Bairro + "&Usuario_Muni=" + Usuario_Muni + "&Usuario_Uf=" + Usuario_Uf + "&CadastrarUser=";	
              if ($.trim(Usuario_Senha).length > 0 & $.trim(Usuario_Email).length > 0 & $.trim(Usuario_Nome).length > 0) {		        
                $.ajax({
                      type: "POST",
                      url: "http://localhost/Mobile_Acessib/cadastro/sign-up.php",
                      data: dataString,		
                      crossDomain: true,
                      cache: false,
                  beforeSend: function() {
                          $("#CadastrarUser").val('Conectando ao banco...');
                      },
                     success: function(data) {				
                          if ($.trim(data) == "success") {
                              alert("Dados Inseridos com sucesso");
                              $("#CadastrarUser").val('Cadastrar');
                          } else if (data == "error") {
                              alert("error");
                          }
                      }
                  });
              }
        else
        {
        alert("Preencha os campos exigidos");
              return false;
        }
          });
      });
      </script>
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-1925">
    <div class="u-clearfix u-sheet u-sheet-1">
        
      <a href="restrito.php" data-page-id="3050230022" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40" title="Início">
        <img src="images/default-logo.png" class="u-logo-image u-logo-image-1" data-image-width="64">
      </a>
        
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
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
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" href="restrito.php" style="padding: 10px 16px;">Início</a>
                </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" href="cadastro-de-estabelecimento.html" style="padding: 10px 16px;">Cadastre um estabelecimento</a>
                </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" href="cadastro-de-trajeto.html" style="padding: 10px 16px;">Cadastre um trajeto</a>
                </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" href="avaliacao-de-estabelecimento.html" style="padding: 10px 16px;">Avalie um estabelecimento</a>
                </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" href="avaliacao-de-trajeto.html" style="padding: 10px 16px;">Avalie um trajeto</a>
                </li>
            </ul>
          </div>
          
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="restrito.php" style="padding: 10px 20px;">Início</a>
                    </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="cadastro-de-estabelecimento.html" style="padding: 10px 20px;">Cadastre um estabelecimento</a>
                    </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="cadastro-de-trajeto.html" style="padding: 10px 20px;">Cadastre um trajeto</a>
                    </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="avaliacao-de-estabelecimento.html" style="padding: 10px 20px;">Avalie um estabelecimento</a>
                    </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="avaliacao-de-trajeto.html" style="padding: 10px 20px;">Avalie um trajeto</a>
                    </li>
                </ul>
              </div>
            </div>

            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>

        <a href="Entrar.html" data-page-id="247969335" class="u-border-0 u-btn u-btn-round u-button-style u-hover-palette-5-light-2 u-radius-50 u-text-palette-1-base u-white u-btn-1"> Entrar </a>       
  </div>
</header>

    <section class="u-align-center u-clearfix u-section-1" id="sec-87ac">
      <div class="u-clearfix u-sheet u-sheet-1">
        
        <h2 class="u-text u-text-1">Avaliação de trajeto</h2>
        
        <div class="u-form u-form-1">
         
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-radiobutton u-form-group-1">
              <div class="u-form-radio-button-wrapper">
				        <label for="text-fb58" class="u-label"><b>Rampas de acesso nas calçadas:</label><br>
                <input type="radio" name="rampas" value="Não há nenhuma" required="required">
                <label class="u-label" for="radiobutton">Não há nenhuma</label>
                <br>
                <input type="radio" name="rampas" value="Uma ou mais" required="required">
                <label class="u-label" for="radiobutton">Uma ou mais</label>
                <br>
              </div>
            </div>

            <select id="Usuario_Def" name="Usuario_Def" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
              <option value="#"> Selecione </option>
              <option value="Motora"> Não há rampas nas calçadas </option>
              <option value="Sensorial"> Uma ou mais, se </option>
              <option value="Intelectual"> Sim, deficiência intelectual </option>
              <option value="Multipla"> Sim, deficiência múltipla </option>
              <option value="Não"> Não possuo nenhuma deficiência </option>
            </select>
          </div>
        </div>

            <div class="u-form-group u-form-radiobutton u-form-group-2">
              <div class="u-form-radio-button-wrapper">
				<label for="text-fb58" class="u-label"><b>Qualidade das rampas:</label><br>
                <input type="radio" name="rampas_qualidade" value="Bom estado" required="required">
                <label class="u-label" for="radiobutton">Bom estado</label>
                <br>
                <input type="radio" name="rampas_qualidade" value="Medianas" required="required">
                <label class="u-label" for="radiobutton">Medianas</label>
                <br>
                <input type="radio" name="rampas_qualidade" value="Ruins ou muito inclinadas" required="required">
                <label class="u-label" for="radiobutton">Ruins ou muito inclinadas</label>
                <br>
                <input type="radio" name="rampas_qualidade" value="Não sei" required="required">
                <label class="u-label" for="radiobutton">Não sei</label>
                <br>
              </div>
            </div>
            <div class="u-form-group u-form-radiobutton u-form-group-3">
              <div class="u-form-radio-button-wrapper">
				<label for="text-fb58" class="u-label"><b>Vagas de estacionamento para pessoas com deficiência:</label><br>
                <input type="radio" name="vagas" value="Nenhuma" required="required">
                <label class="u-label" for="radiobutton">Nenhuma</label>
                <br>
                <input type="radio" name="vagas" value="Uma ou mais" required="required">
                <label class="u-label" for="radiobutton">Uma ou mais</label>
                <br>
              </div>
            </div>
            <div class="u-form-group u-form-radiobutton u-form-group-4">
              <div class="u-form-radio-button-wrapper">
				<label for="text-fb58" class="u-label"><b>Qualidade das vagas de estacionamento:</label><br>
                <input type="radio" name="vagas_qualidade" value="Bom estado" required="required">
                <label class="u-label" for="radiobutton">Bom estado</label>
                <br>
                <input type="radio" name="vagas_qualidade" value="Ruins, estão mal demarcadas e/ou estreitas" required="required">
                <label class="u-label" for="radiobutton">Ruins, estão mal demarcadas e/ou estreitas</label>
                <br>
                <input type="radio" name="vagas_qualidade" value="Não sei" required="required">
                <label class="u-label" for="radiobutton">Não sei</label>
                <br>
              </div>
            </div>
            <div class="u-form-group u-form-radiobutton u-form-group-5">
              <div class="u-form-radio-button-wrapper">
			   <label for="text-fb58" class="u-label"><b>Qualidade das calçadas:</label><br>
                <input type="radio" name="calcadas" value="Bom estado" required="required">
                <label class="u-label" for="radiobutton">Bom estado</label>
                <br>
                <input type="radio" name="calcadas" value="Ruins, há muitas obstruções e/ou saliências" required="required">
                <label class="u-label" for="radiobutton">Ruins, há muitas obstruções e/ou saliências</label>
                <br>
                <input type="radio" name="calcadas" value="Não sei" required="required">
                <label class="u-label" for="radiobutton">Não sei</label>
                <br>
              </div>
            </div>
            <div class="u-form-group u-form-radiobutton u-form-group-6">
              <div class="u-form-radio-button-wrapper">
				<label for="text-fb58" class="u-label"><b>Qualidade das ruas:</label><br>
                <input type="radio" name="ruas" value="Bom estado" required="required">
                <label class="u-label" for="radiobutton">Bom estado</label>
                <br>
                <input type="radio" name="ruas" value="Ruins, há muitas obstruções e/ou saliências" required="required">
                <label class="u-label" for="radiobutton">Ruins, há muitas obstruções e/ou saliências</label>
                <br>
                <input type="radio" name="ruas" value="Não sei" required="required">
                <label class="u-label" for="radiobutton">Não sei</label>
                <br>
              </div>
            </div>
			<!-- Colocar aqui o sistema de 5 estrelas -->
	<a href="javascript:void(0)" onclick="Avaliar(1)">
<img src="images/star0.png" height="50" width="50" id="s1"></a>

<a href="javascript:void(0)" onclick="Avaliar(2)">
<img src="images/star0.png" height="50" width="50" id="s2"></a>

<a href="javascript:void(0)" onclick="Avaliar(3)">
<img src="images/star0.png" height="50" width="50" id="s3"></a>

<a href="javascript:void(0)" onclick="Avaliar(4)">
<img src="images/star0.png" height="50" width="50" id="s4"></a>

<a href="javascript:void(0)" onclick="Avaliar(5)">
<img src="images/star0.png" height="50" width="50" id="s5"></a>
<p id="rating">0</p>
			
            <div class="u-align-left u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">Enviar</a>
              <input type="submit" value="Enviar avaliacao" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Sucesso! </div>
            <div class="u-form-send-error u-form-send-message"> Erro. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>