$(document).ready(function() {
  var url = "http://localhost/TCC_Acessib/www/consultar/consultar-estab.php";
  $.getJSON(url, function(result) {
      console.log(result);
      $.each(result, function(i, field) {
          //oq ta dps do field deve estar exatamente igual ao q ta no banco de dados
          var cnpj = field.CNPJ;
          var nome_estab = field.Nome_Estab;
          var cep = field.CEP;
          
  
          $("#listview").append("<a class='item' Estab_Cnpj=" + cnpj  + "&Estab_Nome=" + nome_estab + "&Estab_Cep=" + cep +  "'><span class='item-note'><h2>" + cnpj + "</h2></span>" + nome_estab + "<p>" + cep + "</p></a>");
      });
  });
});



var geocoder;
var map;
var marker;

function initialize() {
  var lat = parseFloat(localStorage.getItem('lat'));
  var lon = parseFloat(localStorage.getItem('lon'));
  var meulocal = {lat: lat, lng: lon};

  var options = {
      zoom: 16,
      center: meulocal,
      mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  map = new google.maps.Map(document.getElementById('mapa'), options);

  geocoder = new google.maps.Geocoder();

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
  });

  marker.setPosition(meulocal);
}



  //para pegar o nome e endereço do local do banco e trabalhar no mesmo escopo
  $(document).ready(function() {
    var url = "http://localhost/TCC_Acessib/www/consultar/consultar-mapa.php";
    $.getJSON(url, function(result) {
        console.log(result);
        $.each(result, function(i, field) {
            //oq ta dps do field deve estar exatamente igual ao q ta no banco de dados
          var nome = field.Nome_Estab;
          var endereco = field.Endereco;
          var tipo = field.Tipo;
          var ide = field.ID_Estab;
          
          console.log(nome);
          console.log(endereco);
          console.log(tipo);
          console.log(ide);
          //geocodificação para transformar o endereço do banco em latitude e longitude
              var geocoder = new google.maps.Geocoder();
          geocoder.geocode({'address':endereco}, function(results, status){ 
           if( status == 'OK'){

       var latelon=  results[0].geometry.location;
      
              var locations = [
              [nome, tipo, ide, latelon] 
              ];
              
              for (i = 0; i < locations.length; i++)
              {  

              //marcador do poonto no mapa
                var  marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][2]),
                title: locations[i][0],
                map: map,
                position: latelon,
                icon: 'images/map_estab2.png',	
              });

              //janela de informações do ponto, e a ação da mesma aparecer quando clicar
              var infowindow = new google.maps.InfoWindow({
                content: "<strong>" + locations[i][0] + "</strong><br>" + locations[i][1] 
              });
              google.maps.event.addListener(marker, 'click', function(event) {
                infowindow.open(map,marker);
              });

              }
       
            }

            else{
         console.log(status);
            }
          });


        });
    });


  }); 

  initialize();