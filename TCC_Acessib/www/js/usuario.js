$(document).ready(function() {
    $("#CadastrarUser").click(function() {
        var Usuario_Email = $("#Usuario_Email").val();
        var Usuario_Senha = $("#Usuario_Senha").val();

        var Usuario_Nome = $("#Usuario_Nome").val();
        var Usuario_Apelido = $("#Usuario_Apelido").val();
        var Usuario_Def = $("#Usuario_Def").val();
        var Usuario_Bio = $("#Usuario_Bio").val();
        var Usuario_Tel = $("#Usuario_Tel").val();
          
        var dataString = "Usuario_Email=" + Usuario_Email + "&Usuario_Senha=" + Usuario_Senha + "&Usuario_Nome=" + Usuario_Nome + "&Usuario_Apelido=" + Usuario_Apelido + "&Usuario_Def=" + Usuario_Def + "&Usuario_Bio=" + Usuario_Bio + "&Usuario_Tel=" + Usuario_Tel + "&CadastrarUser=";	
        var rest = "http://localhost/TCC_Acessib/www/Entrar.php";
        if ($.trim(Usuario_Senha).length > 0 & $.trim(Usuario_Email).length > 0 & $.trim(Usuario_Nome).length > 0 & $.trim(Usuario_Tel).length > 0) {		        
          $.ajax({
                type: "POST",
                url: "http://localhost/TCC_Acessib/www/cadastro/sign-up.php",
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

                        window.location.href = rest;
                    } else if (data == "error") {
                        alert("Algo deu errado, tente novamente.");
                    } else if (data == "exist") {
                        alert("Email ou número de telefone fornecido já existe, tente um diferente.");
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