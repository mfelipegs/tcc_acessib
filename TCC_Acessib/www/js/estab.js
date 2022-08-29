$(document).ready(function() {
    $("#CadastrarEstab").click(function() {
        var Acessib = " ";

        if(AcessibA_Rampas.checked)
        {
          Acessib += "1";
        }
        if(AcessibA_Piso.checked)
        {
          Acessib += " 2";
        }
        if(AcessibA_Moveis.checked)
        {
          Acessib += " 3";
        }
        if(AcessibA_Comodos.checked)
        {
          Acessib += " 4";
        }

        if(AcessibC_Libras.checked)
        {
          Acessib += " 5";
        }
        if(AcessibC_Img.checked)
        {
          Acessib += " 6";
        }
        if(AcessibC_Leg.checked)
        {
          Acessib += " 7";
        }
        if(AcessibC_Dub.checked)
        {
          Acessib += " 8";
        }
        if(AcessibC_Braille.checked)
        {
          Acessib += " 9";
        }
        else{
          Acessib += " ";
        }

        var user_id = $("#user_id").val();

        var Estab_Cnpj = $("#Estab_Cnpj").val();
        var Estab_Nome = $("#Estab_Nome").val();

        var Estab_Num = $("#Estab_Num").val();
        var Estab_Rua = $("#Estab_Rua").val();
        var Estab_Bairro = $("#Estab_Bairro").val();
        var Estab_Cidade = $("#Estab_Cidade").val();
        var Estab_Cep = $("#Estab_Cep").val();
        var Estab_Uf = $("#Estab_Uf").val();

        var Estab_Tel = $("#Estab_Tel").val();
        var Estab_Tipo = $("#Estab_Tipo").val();
        var Estab_Email = $("#Estab_Email").val();

        var Acessib_Bio = $("#Acessib_Bio").val();

        var Estab_Hora = $("#Estab_Hora").val();

        var Endereco = $("#Estab_Rua").val() + ', ' + $("#Estab_Num").val() + '-' + $("#Estab_Bairro").val() + ', ' + $("#Estab_Cidade").val() + '-' + $("#Estab_Uf").val() + ', ' + $("#Estab_Cep").val();

        var dataString = "Acessib=" + Acessib + "&Endereco=" + Endereco + "&Estab_Cnpj=" + Estab_Cnpj + "&user_id=" + user_id + "&Estab_Nome=" + Estab_Nome + "&Estab_Num=" + Estab_Num + "&Estab_Rua=" + Estab_Rua + "&Estab_Bairro=" + Estab_Bairro + "&Estab_Cidade=" + Estab_Cidade + "&Estab_Cep=" + Estab_Cep + "&Estab_Uf=" + Estab_Uf + "&Estab_Email=" + Estab_Email + "&Estab_Tel=" + Estab_Tel + "&Estab_Tipo=" + Estab_Tipo + "&Acessib_Bio=" + Acessib_Bio + "&Estab_Hora=" + Estab_Hora + "&CadastrarEstab=";	
        var rest = "http://localhost/TCC_Acessib/www/foto_estab.php?id=" + $("#user_id").val();
        if ($.trim(Estab_Cnpj).length > 0 & $.trim(Estab_Nome).length > 0) {		        
          $.ajax({
                type: "POST",
                url: "cadastro/cadastrar-estab.php",
                data: dataString,		
                crossDomain: true,
                cache: false,
            beforeSend: function() {
                    $("#CadastrarEstab").val('Conectando ao banco...');
                },
               success: function(data) {				
                    if ($.trim(data) == "success") {
                        alert("Seu estabelecimento foi cadastrado com sucesso!");
                        $("#CadastrarEstab").val('Cadastrar');

                        window.location.href = rest;
                    } else if (data == "error") {
                        alert("Algo deu errado, tente novamente.");
                    } else if (data == "exist") {
                        alert("O CNPJ informado já foi cadastrado.");
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



$(document).ready(function() {
  $("#UpdateEstab").click(function() {    
  var Acessib = " ";

  if(AcessibA_Rampas.checked)
  {
    Acessib += "1";
  }
  if(AcessibA_Piso.checked)
  {
    Acessib += " 2";
  }
  if(AcessibA_Moveis.checked)
  {
    Acessib += " 3";
  }
  if(AcessibA_Comodos.checked)
  {
    Acessib += " 4";
  }

  if(AcessibC_Libras.checked)
  {
    Acessib += " 5";
  }
  if(AcessibC_Img.checked)
  {
    Acessib += " 6";
  }
  if(AcessibC_Leg.checked)
  {
    Acessib += " 7";
  }
  if(AcessibC_Dub.checked)
  {
    Acessib += " 8";
  }
  if(AcessibC_Braille.checked)
  {
    Acessib += " 9";
  }
  else{
    Acessib += " ";
  }

  var user_id = $("#user_id").val();
  var estab_id = $("#estab_id").val();

  var Estab_Cnpj = $("#Estab_Cnpj").val();
  var Estab_Nome = $("#Estab_Nome").val();

  var Estab_Num = $("#Estab_Num").val();
  var Estab_Rua = $("#Estab_Rua").val();
  var Estab_Bairro = $("#Estab_Bairro").val();
  var Estab_Cidade = $("#Estab_Cidade").val();
  var Estab_Cep = $("#Estab_Cep").val();
  var Estab_Uf = $("#Estab_Uf").val();

  var Estab_Tel = $("#Estab_Tel").val();
  var Estab_Tipo = $("#Estab_Tipo").val();
  var Estab_Email = $("#Estab_Email").val();

  var Acessib_Bio = $("#Acessib_Bio").val();

  var Estab_Hora = $("#Estab_Hora").val();

  var Endereco = $("#Estab_Rua").val() + ', ' + $("#Estab_Num").val() + '-' + $("#Estab_Bairro").val() + ', ' + $("#Estab_Cidade").val() + '-' + $("#Estab_Uf").val() + ', ' + $("#Estab_Cep").val();
  
  var dataString = "Acessib=" + Acessib + "&Estab_Cnpj=" + Estab_Cnpj + "&Endereco=" + Endereco + "&estab_id=" + estab_id + "&user_id=" + user_id + "&Estab_Nome=" + Estab_Nome + "&Estab_Num=" + Estab_Num + "&Estab_Rua=" + Estab_Rua + "&Estab_Bairro=" + Estab_Bairro + "&Estab_Cidade=" + Estab_Cidade + "&Estab_Cep=" + Estab_Cep + "&Estab_Uf=" + Estab_Uf + "&Estab_Email=" + Estab_Email + "&Estab_Tel=" + Estab_Tel + "&Estab_Tipo=" + Estab_Tipo + "&Acessib_Bio=" + Acessib_Bio + "&Estab_Hora=" + Estab_Hora + "&update=";	
  $.ajax({
  type: "POST",
  url: "http://localhost/TCC_Acessib/www/alterar/alterar_estab.php",
  data: dataString,
  crossDomain: true,
  cache: false,
  
  beforeSend: function() {
    $("#update").val('Conectando...');
    },
    success: function(data) {				
        if ($.trim(data) == "success") {
            alert("Dados Atualizados com sucesso");
            $("#update").val("Alterar Dados");

        } else if (data == "error") {
            alert("Algo deu errado, tente novamente.");
        }
      }
    });
  });
});