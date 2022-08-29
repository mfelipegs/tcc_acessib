$(function(){
    $('#file').change(function(){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()
        fileReader.onloadend = function(){
        $('#imgestab').attr('src', fileReader.result)
        $('#imgestabo').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
})



$(function(){
    $('#foto').change(function(){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()
        fileReader.onloadend = function(){
        $('#fotop').attr('src', fileReader.result)
        $('#fotopo').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
})



$(function(){
    $('#foto01').change(function(){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()
        fileReader.onloadend = function(){
        $('#1foto').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
})



$(function(){
    $('#foto02').change(function(){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()
        fileReader.onloadend = function(){
        $('#2foto').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
})



$(function(){
    $('#foto03').change(function(){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()
        fileReader.onloadend = function(){
        $('#3foto').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
})



function perfil(){
    if (foto.files.length > 0) {
        let formData = new FormData();
        var rest = "http://localhost/TCC_Acessib/www/mod_album.php?id=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
        formData.append("foto",foto.files[0]); 
        fetch("http://localhost/TCC_Acessib/www/alterar/alt_perfil_estab.php?ide=" + $("#estab_id").val() + "&foto=" + $("#fotop").val(), {
        method: 'POST',
        body: formData,
    })
        .then(respuesta => respuesta.text())
        .then(decodificado => {
        console.log(decodificado);

    alert("Foto de perfil alterada com sucesso!");
        window.location.href = rest;
    });
    }
  }


  
  function altfoto1(){
    if (foto01.files.length > 0) {
        let formData = new FormData();
        var rest = "http://localhost/TCC_Acessib/www/mod_album.php?id=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
        formData.append("foto01",foto01.files[0]); 
        fetch("http://localhost/TCC_Acessib/www/alterar/alt_foto1.php?ide=" + $("#estab_id").val() + "&foto=" + $("#foto1").val(), {
        method: 'POST',
        body: formData,
    })
        .then(respuesta => respuesta.text())
        .then(decodificado => {
        console.log(decodificado);

    alert("Primeira foto alterada com sucesso!");
        window.location.href = rest;
    });
    }
  }



  function altfoto2(){
    if (foto02.files.length > 0) {
        let formData = new FormData();
        var rest = "http://localhost/TCC_Acessib/www/mod_album.php?id=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
        formData.append("foto02",foto02.files[0]); 
        fetch("http://localhost/TCC_Acessib/www/alterar/alt_foto2.php?ide=" + $("#estab_id").val() + "&foto=" + $("#foto2").val(), {
        method: 'POST',
        body: formData,
    })
        .then(respuesta => respuesta.text())
        .then(decodificado => {
        console.log(decodificado);

    alert("Segunda foto alterada com sucesso!");
        window.location.href = rest;
    });
    }
  }



  function altfoto3(){
    if (foto03.files.length > 0) {
        let formData = new FormData();
        var rest = "http://localhost/TCC_Acessib/www/mod_album.php?id=" + $("#user_id").val() + "&ide=" + $("#estab_id").val();
        formData.append("foto03",foto03.files[0]); 
        fetch("http://localhost/TCC_Acessib/www/alterar/alt_foto3.php?ide=" + $("#estab_id").val() + "&foto=" + $("#foto3").val(), {
        method: 'POST',
        body: formData,
    })
        .then(respuesta => respuesta.text())
        .then(decodificado => {
        console.log(decodificado);

    alert("Segunda foto alterada com sucesso!");
        window.location.href = rest;
    });
    }
  }