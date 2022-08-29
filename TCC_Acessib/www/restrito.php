<?php
  include("head.php");
  error_reporting(0);
  session_start();

  $id = $_GET['id'];
  //o $_Get[id] vêm da página de login

  //essa consulta é só para o session
  $dados = mysqli_query($con, "SELECT Apelido FROM Usuario WHERE ID_User = ". $id);

  $exibe = mysqli_fetch_array($dados);
  $_SESSION["Hi"] = $exibe[0];
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <title> Mapa local </title>

  <link rel="stylesheet" href="css/estab.css" media="screen">
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-1925">
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            
            <a style="padding: 60px 230px 5px 10px;" class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
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
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-5-light-1" style="padding: 10px 20px;"></a>
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
                  <li class="u-nav-item"> <?php echo "<a class='u-button-style u-nav-link' href='restrito.php?id=".$id."' style='padding: 10px 20px;'>" ."<img src='images/acessib.png' class='u-logo-image u-logo-image-1' data-image-width='64'>". "</a>"; ?>
                    </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" <?php echo "href='cadastro-de-estabelecimento.php?id=".$id."'" ?> style="padding: 10px 20px;"> Cadastre um estabelecimento </a>
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
      </div></header>

    <section class="u-align-center u-clearfix u-section-1" id="sec-6fbd"><center>
      <div class="u-clearfix u-sheet u-sheet-1">

      <input type="hidden" id="idu" class="idu"  value="<?php echo $exibe[0] ?>">

        <h2 class="u-text u-text-1"> Mapa </h2>
        <h4> Já cadastrou seu estabelecimento? Se não, <a <?php echo "href='cadastro-de-estabelecimento.php?id=".$id."'" ?>> clique aqui </a></h4>

        <form class="pesquisa" <?php echo "action='restrito.php?id=".$id."'"; ?> method="POST">
          <input type="search" id="textopesq" name="textopesq" list="historico" placeholder="Busque por nome">
          <button type="submit" class="btnpesq">
            <img src="images/lupa.png">
          </button>
          
          <datalist id="historico">
            <option value="Padaria"></option>
            <option value="Supermercado"></option>
          </datalist>
        </form>


        <div id="mapa" style="height: 550px; width: 100%"></div>
 
        <!-- Maps API Javascript -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnF5EkADLnXWLZmQFELB7WueUvqHF0bm4&sensor=false"></script>
 
        <!-- Arquivo de inicialização do mapa -->
        <script src="js/mapa.js"></script><br>

      <table border="0" width="340px">
      <?php
        if(isset($_POST["textopesq"]))
        {
          $pesquisa = "SELECT * FROM Estabelecimento WHERE Nome_Estab LIKE '%".$_POST['textopesq']."%'"; 
        } else{
          $pesquisa = "SELECT * FROM Estabelecimento";
        }

        $estab = mysqli_query($con, $pesquisa);

        while($e = mysqli_fetch_array($estab))
        {
          $med = mysqli_query($con, "SELECT round(avg(Estrela), 1) as aval FROM Aval_Estabelecimento WHERE ID_Estab = ".$e[0]);

          echo "<tr>";
      ?>
            <td class="mostrar" width="60px"> <img style="border: 1px solid #000; border-radius:60%; width: 60px; height: 60px;" src="<?php if($e[17] == null){ echo "http://localhost/TCC_Acessib/www/images/acessib.png";} else{ echo "http://localhost/TCC_Acessib/www/cadastro/album/".$e[17];} ?>">  
            </td>
      <?php
          echo 
            "<td class='mostrar'><b><a href='aval_estab.php?ide=".$e[0]."&idu=".$id."'>".$e[3]."</b><br>".
            $e[7]."</td>";
          echo "<td class='mostrar' width='10px' align='right'>";
            
            while($sum = mysqli_fetch_array($med)){
      ?>
              <p class='starlist'><?php if(isset($sum['aval'])){ echo $sum['aval']; } else{ echo "0.0"; }?> </p>
      <?php
            }

          echo "</td>";
          echo "<td width='10px'>" ."<img src='images/star1.png'>". "</td>";
          echo "</tr>";
        }
      ?>
      </table>
      </div>
      </center></section><br><br>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5413"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Ascent - 2021 - © Todos os direitos reservados.</p>
      </div></footer>
     
  </body>
</html>