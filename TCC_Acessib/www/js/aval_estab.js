$(document).ready(function() {
    $("#CadastrarAval").click(function() {

        var Estab_Rampas = " ";
        if(Estab_Rampas0.checked){
            Estab_Rampas = "Nenhuma";
        }
        else if(Estab_Rampas1.checked){
            Estab_Rampas = "Uma";
        }
        else if(Estab_Rampas2.checked){
            Estab_Rampas = "Duas ou mais";
        }
        else if(Estab_Rampas3.checked){
            Estab_Rampas = "Não há necessidade";
        } else{
            Estab_Rampas = "Não avaliado";
        }


        var Estab_RampasQ = " ";
        if(Estab_RampasQ1.checked){
            Estab_RampasQ = "Bom estado";
        }
        else if(Estab_RampasQ2.checked){
            Estab_RampasQ = "Medianas";
        }
        else if(Estab_RampasQ3.checked){
            Estab_RampasQ = "Ruins";
        }
        else if(Estab_RampasQ4.checked){
            Estab_RampasQ = "Não sei";
        } else{
            Estab_RampasQ = "Não avaliado";
        }
        

        var Estab_Portas = " ";
        if(Estab_Portas1.checked){
            Estab_Portas = "Adequado";
        }
        else if(Estab_Portas2.checked){
            Estab_Portas = "Muito estreito";
        }else{
            Estab_Porta = "Não avaliado";
        }


        var Estab_Vagas = " ";
        if(Estab_Vagas0.checked){
            Estab_Vagas = "Nenhuma";
        }
        else if(Estab_Vagas1.checked){
            Estab_Vagas = "Uma";
        }
        else if(Estab_Vagas2.checked){
            Estab_Vagas = "Duas ou mais";
        }
        else if(Estab_Vagas3.checked){
            Estab_Vagas = "Não sei";
        }else{
            Estab_Vagas= "Não avaliado";
        }


        var Estab_VagasQ = " ";
        if(Estab_VagasQ1.checked){
            Estab_VagasQ = "Bom estado";
        }
        else if(Estab_VagasQ2.checked){
            Estab_VagasQ = "Ruins, estão mal demarcadas e/ou estreitas";
        }
        else if(Estab_VagasQ3.checked){
            Estab_VagasQ = "Não sei";
        }else{
            Estab_VagasQ = "Não avaliado";
        }


        var Estab_Banheiro = " ";
        if(Estab_Banheiro1.checked){
            Estab_Banheiro = "Não há nenhum";
        }
        else if(Estab_Banheiro2.checked){
            Estab_Banheiro = "Um";
        }
        else if(Estab_Banheiro3.checked){
            Estab_Banheiro = "Dois ou mais";
        }
        else if(Estab_Banheiro4.checked){
            Estab_Banheiro = "Não sei";
        }else{
            Estab_Banheiro = "Não avaliado";
        }


        var Estrela = " ";
        if(Estrela_Um.checked){
            Estrela = "1";
        }
        else if(Estrela_Dois.checked){
            Estrela = "2";
        }
        else if(Estrela_Tres.checked){
            Estrela = "3";
        }
        else if(Estrela_Quatro.checked){
            Estrela = "4";
        }
        else if(Estrela_Cinco.checked){
            Estrela = "5";
        }else{
            Estrela = "0";
        }

        var estab_id = $("#estab_id").val();
        var user_id = $("#user_id").val();

        var Estab_Coment = $("#Estab_Coment").val();

        var dataString = "estab_id=" + estab_id + "&user_id=" + user_id + "&Estab_Rampas=" + Estab_Rampas + "&Estab_RampasQ=" + Estab_RampasQ + "&Estab_Portas=" + Estab_Portas + "&Estab_Vagas=" + Estab_Vagas + "&Estab_VagasQ=" + Estab_VagasQ + "&Estab_Banheiro=" + Estab_Banheiro + "&Estab_Coment=" + Estab_Coment + "&Estrela=" + Estrela + "&insert=";	
        var atu = "http://localhost/TCC_Acessib/www/aval_estab.php?idu=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
        
        if ($.trim(estab_id).length > 0 & $.trim(user_id).length > 0) {		        
            $.ajax({
                type: "POST",
                url: "http://localhost/TCC_Acessib/www/avaliacao/avaliacao-estab.php",
                data: dataString,		
                crossDomain: true,
                cache: false,
            beforeSend: function() {
                    $("#CadastrarAval").val('Conectando ao banco...');
                },
                success: function(data) {				
                    if ($.trim(data) == "success") {
                        alert("Avaliação enviada!");
                        $("#CadastrarAval").val('Cadastrar');

                        window.location.href = atu;
                    } else if (data == "error") {
                        alert("Algo deu errado, tente novamente.");
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
    $("#CadResposta").click(function() {
        var estab_id = $("#estab_id").val();
        var user_id = $("#user_id").val();
        var cli_id = $("#cli_id").val();
        var aval_id = $("#aval_id").val();

        var Resposta = $("#resposta").val();

        var dataString = "estab_id=" + estab_id + "&user_id=" + user_id + "&cli_id=" + cli_id + "&aval_id=" + aval_id + "&Resposta=" + Resposta + "&insert=";	
        var atu = "http://localhost/TCC_Acessib/www/comentario.php?ida=" + $("#aval_id").val() + "&id=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
        
        if ($.trim(estab_id).length > 0 & $.trim(user_id).length > 0) {		        
            $.ajax({
                type: "POST",
                url: "http://localhost/TCC_Acessib/www/cadastro/cadastrar-resposta.php",
                data: dataString,		
                crossDomain: true,
                cache: false,
            beforeSend: function() {
                    $("#CadResposta").val('Conectando ao banco...');
                },
                success: function(data) {				
                    if ($.trim(data) == "success") {
                        alert("Resposta enviada!");
                        $("#CadResposta").val('Cadastrar');

                        window.location.href = atu;
                    } else if (data == "error") {
                        alert("Algo deu errado, tente novamente.");
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



function mostrar(){
    var mostrar = document.getElementById("mostrar");
    var avali = document.getElementById("avali");
    var mais = document.getElementById("mais");

    if(mostrar.style.display === "none"){
      mostrar.style.display = "inline";
      avali.style.display = "none";
      mais.innerHTML = "Avaliar";
    } else{
      mostrar.style.display = "none";
      avali.style.display = "inline";
      mais.innerHTML = "Cancelar";
    }
  }



  $(document).ready(function() {
    $("#UpdateAval").click(function() {  
    var Estab_Rampas = " ";
    if(Estab_Rampas0.checked){
        Estab_Rampas = "Nenhuma";
    }
    else if(Estab_Rampas1.checked){
        Estab_Rampas = "Uma";
    }
    else if(Estab_Rampas2.checked){
        Estab_Rampas = "Duas ou mais";
    }
    else if(Estab_Rampas3.checked){
        Estab_Rampas = "Não há necessidade";
    } else{
        Estab_Rampas = "Não avaliado";
    }


    var Estab_RampasQ = " ";
    if(Estab_RampasQ1.checked){
        Estab_RampasQ = "Bom estado";
    }
    else if(Estab_RampasQ2.checked){
        Estab_RampasQ = "Medianas";
    }
    else if(Estab_RampasQ3.checked){
        Estab_RampasQ = "Ruins";
    }
    else if(Estab_RampasQ4.checked){
        Estab_RampasQ = "Não sei";
    } else{
        Estab_RampasQ = "Não avaliado";
    }
    

    var Estab_Portas = " ";
    if(Estab_Portas1.checked){
        Estab_Portas = "Adequado";
    }
    else if(Estab_Portas2.checked){
        Estab_Portas = "Muito estreito";
    }else{
        Estab_Porta = "Não avaliado";
    }


    var Estab_Vagas = " ";
    if(Estab_Vagas0.checked){
        Estab_Vagas = "Nenhuma";
    }
    else if(Estab_Vagas1.checked){
        Estab_Vagas = "Uma";
    }
    else if(Estab_Vagas2.checked){
        Estab_Vagas = "Duas ou mais";
    }
    else if(Estab_Vagas3.checked){
        Estab_Vagas = "Não sei";
    }else{
        Estab_Vagas= "Não avaliado";
    }


    var Estab_VagasQ = " ";
    if(Estab_VagasQ1.checked){
        Estab_VagasQ = "Bom estado";
    }
    else if(Estab_VagasQ2.checked){
        Estab_VagasQ = "Ruins, estão mal demarcadas e/ou estreitas";
    }
    else if(Estab_VagasQ3.checked){
        Estab_VagasQ = "Não sei";
    }else{
        Estab_VagasQ = "Não avaliado";
    }


    var Estab_Banheiro = " ";
    if(Estab_Banheiro1.checked){
        Estab_Banheiro = "Não há nenhum";
    }
    else if(Estab_Banheiro2.checked){
        Estab_Banheiro = "Um";
    }
    else if(Estab_Banheiro3.checked){
        Estab_Banheiro = "Dois ou mais";
    }
    else if(Estab_Banheiro4.checked){
        Estab_Banheiro = "Não sei";
    }else{
        Estab_Banheiro = "Não avaliado";
    }


    var Estrela = " ";
    if(Estrela_Um.checked){
        Estrela = "1";
    }
    else if(Estrela_Dois.checked){
        Estrela = "2";
    }
    else if(Estrela_Tres.checked){
        Estrela = "3";
    }
    else if(Estrela_Quatro.checked){
        Estrela = "4";
    }
    else if(Estrela_Cinco.checked){
        Estrela = "5";
    }else{
        Estrela = "0";
    }

    var aval_id = $("#aval_id").val();

    var Estab_Coment = $("#Estab_Coment").val();

    var dataString = "aval_id=" + aval_id + "&Estab_Rampas=" + Estab_Rampas + "&Estab_RampasQ=" + Estab_RampasQ + "&Estab_Portas=" + Estab_Portas + "&Estab_Vagas=" + Estab_Vagas + "&Estab_VagasQ=" + Estab_VagasQ + "&Estab_Banheiro=" + Estab_Banheiro + "&Estab_Coment=" + Estab_Coment + "&Estrela=" + Estrela + "&update=";	
    var rest = "http://localhost/TCC_Acessib/www/aval_estab.php?idu=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
    $.ajax({
        type: "POST",
        url: "http://localhost/TCC_Acessib/www/alterar/alterar_aval.php",
        data: dataString,		
        crossDomain: true,
        cache: false,
    beforeSend: function() {
            $("#UpdateAval").val('Conectando ao banco...');
        },
        success: function(data) {				
            if ($.trim(data) == "success") {
                alert("Avaliação alterada com sucesso!");
                $("#UpdateAval").val('Cadastrar');

                window.location.href = rest;
            } else if (data == "error") {
                alert("Algo deu errado, tente novamente.");
            } 
        }
    });
  });
});