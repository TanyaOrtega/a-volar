//Hover a los posts
$(document).ready(function () {
  $(".post").hover(
    function () {
      $(this).find("img").addClass("resaltado");
    },
    function () {
      $(this).find("img").removeClass("resaltado");
    }
  );
});

//Hover a los elementos del navegador
$(document).ready(function () {
  $(".nav-item").hover(
    function () {
      $(this).addClass("resaltado");
    },
    function () {
      $(this).removeClass("resaltado");
    }
  );
});

//Formulario

$(document).ready(function () {
  $("#search-form").submit(function (event) {
    event.preventDefault(); 

    var searchTerm = $("#search-input").val(); 

    // Petición Ajax
    $.ajax({
      url: "busqueda.php", 
      type: "POST",
      data: { searchTerm: searchTerm }, 
      success: function (response) {
        $("#resultado-container").html(response);
      },
      error: function (xhr, status, error) {
        console.error(error); 
      },
    });
  });
});



$.ajax({
  url: 'https://restcountries.com/v3.1/all?lang=es&sort=name',
  dataType: 'json',
  success: function (data) {
    var paisSelect = document.getElementById('pais');

    for (var i = 0; i < data.length; i++) {
      var option = document.createElement('option');
      option.value = data[i].name.common;
      option.text = data[i].name.common;
      paisSelect.appendChild(option);
    }
  },
  error: function (xhr, status, error) {
    console.error(error);
  }
});

  function cargarCiudades() {
    var pais = document.getElementById('pais').value;
    var ciudadSelect = document.getElementById('ciudad');
    var continenteInput = document.getElementById('continente');


    ciudadSelect.innerHTML = '<option value="">Seleccionar ciudad</option>';
    continenteInput.value = '';
  
  
    $.ajax({
      url: 'https://restcountries.com/v3.1/all?lang=es&sort=name' + encodeURIComponent(pais),
      dataType: 'json',
      success: function (data) {
        if (data.length > 0) {
          var continente = data[0].region;
          continenteInput.value = continente;
        }
      }
    });
  }

