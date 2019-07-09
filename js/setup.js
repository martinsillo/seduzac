/*jslint browser: true*/
/*global $, jQuery, alert, console*/
function checarInternet() {
	'use strict';
	var textMsg = '';
	if (navigator.onLine) {
		textMsg = "<div class='card-panel light-green accent-2'> <i class='fa fa-wifi' aria-hidden='true'></i>&nbsp;Si existe conexión a la red</div>";
	} else {
		textMsg = "<div class='card-panel red lighten-4'><i class='fa fa-ban' aria-hidden='true'></i>&nbsp; No existe una conexión a la red, la instalación puede continuar, en cuanto exista una conexión a al red puede subir los datos registrados y actualizaciones de información</div>";
	}
	return textMsg;
}

function checar() {
	'use strict';
	$.ajax({
		method: "POST",
		url: "scripts/setup.php",
		cache: false,
		data: {
			accion: "checar",
			host: $('#hostTxt').val(),
			puerto: $('#portTxt').val(),
			usuario: $('#userTxt').val(),
			clave: $('#keyTxt').val()
		}
	})
		.done(function (msg) {
			var obj = JSON.parse(msg);
			document.getElementById('internetMSG').innerHTML = obj[1] + checarInternet();
			if (obj[0] == 2) {
				document.getElementById('btnForm1').innerHTML = "<a class='waves-effect waves-light deep-orange darken-2 btn-small' href='javascript:loadRegistroForm();'>Comenzar Instalación</a>";
		    }
		});
	return false;
}

function instalar(){
	
    'use strict';
	
	console.log("loading Instalar");
	
    if($('#clave').val() != $('#clave2').val()){
        alert("Las contraseñas no coinciden");
        $('#clave').focus();
        return false;
    }
    
     $.ajax({
		method: "POST",
		url: "scripts/setup.php",
		cache: false,
		async: false,
		data: {
			tablet: $('#tablet').val(),
            usuario: $('#usuario').val(),
            clave: $('#clave').val(),
			nombre: $('#nombre').val(),
			email: $('#email').val(),
			telefono: $('#telefono').val()
		}
	})
		.done(function (msg) {
		 console.log(msg);
         var obj = jQuery.parseJSON(msg);
         alert( obj[1] );
         if(obj[0] == 1){ location.reload(); }
		});
    
    
    return false;
}

