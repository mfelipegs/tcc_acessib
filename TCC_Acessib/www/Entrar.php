<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <?php include("head.php"); ?>
  <title> Entrar </title>
</head>

<body class="u-body">
<header class="u-clearfix u-header u-palette-1-base u-header" id="sec-1925">
  <div class="u-clearfix u-sheet u-sheet-1">
        
    <a href="index.html" data-page-id="3050230022" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40" title="Início">
      <img src="images/default-logo.png" class="u-logo-image u-logo-image-1" data-image-width="75">
    </a>

        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; padding: 0px 0px 0px 0px;">
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
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 16px;"></a>
				        </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 16px;"></a>
				        </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 16px;"></a>
				        </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 16px;"></a>
				        </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 16px;"></a>
				        </li>
			      </ul>
          </div>

          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;"></a>
					          </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;"></a>
					          </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;"></a>
					          </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;"></a>
					          </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;"></a>
					          </li>
				        </ul>
              </div>
            </div>
            
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          
          </div>
        </nav>
        
        <a href="Cadastro.html" data-page-id="247969335" class="u-border-0 u-btn u-btn-round u-button-style u-hover-palette-5-light-2 u-radius-50 u-text-palette-1-base u-white u-btn-1"  style="margin-top: -40px; "> Cadastrar-se </a>
  </div>
</header>

    <section class="u-align-center u-clearfix u-section-1" id="sec-8eb9">
      <div class="u-clearfix u-sheet u-sheet-1">
        
        <h2 class="u-text u-text-1"> login </h2>
        
        <form method="POST" action="a.php" class="u-align-center u-form u-form-1">

          <div class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;">
            
            <div class="u-form-email u-form-group">
              <label for="email-6797" class="u-label"> E-mail: </label>
              <input type="email" placeholder="Email" id="Usuario_Email" value="clara.gomes10@email.com" name="Usuario_Email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>

            <div class="u-form-group u-form-name">
              <label for="name-6797" class="u-label"> Senha: </label>
              <input type="password" placeholder="Senha" id="Usuario_Senha" value="mclarag" name="Usuario_Senha" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>

            <div class="u-align-center u-form-group u-form-submit">
              <a id="LoginButton" class="u-btn u-btn-submit u-button-style"> Entrar </a>
              <input type="submit" value="Dados" name="LoginButton" id="LoginButton" class="u-form-control-hidden" value="Entrar">
            </div>

            <div class="u-form-send-message u-form-send-success"> Sucesso! </div>
            <div class="u-form-send-error u-form-send-message"> Erro. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          
          </div>

        </form>

        <h2 class="u-text u-text-2">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="Cadastro.html" data-page-id="46639200">ou, <span style="text-decoration: underline !important;">cadastre-se</span>.
          </a>
        </h2>

      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div>
    </footer>
     
  </body>
</html>