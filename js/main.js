/*jslint browser: true*/
/*global $, jQuery, alert, console, */

 $(document).ready(function(){
    $('.modal').modal();
  });


function cargaInfoCCT() {
	'use strict';
	var x, obj, row, cel1, cel2, cel3, cel4, cel5, cel6, cel7, encuestado, evaluarbtn;
	document.getElementById('listaPersonal').innerHTML = "<table class='highlight' id='recordsPersonal'><thead><tr><th>Num Empleado</th><th>RFC</th><th>Nombre</th><th>Puesto</th><th>Encuestado</th><th>Fecha</th><th>Acción</th></tr></thead><tbody></tbody></table>";
	$.ajax({
		method: "POST",
		url: "scripts/cct.php",
		data: {
			cct: $('#autocomplete-cct').val()
		}
	})
		.done(function (msg) {
            console.log(msg);
			if (msg != '') {
				obj = jQuery.parseJSON(msg);
				$('#nomEscuela').val(obj[1]);
				for (x = 0; x < obj[2].length; x++) {
					row = document.getElementById('recordsPersonal').insertRow();
					cel1 = row.insertCell();
					cel2 = row.insertCell();
					cel3 = row.insertCell();
					cel4 = row.insertCell();
					cel5 = row.insertCell();
					cel6 = row.insertCell();
					cel7 = row.insertCell();

					if (obj[2][x][5] == 1) {
						encuestado = "<span style='color:#aeea00;'><i class='fa fa-check-circle' aria-hidden='true'></i></span>";
						evaluarbtn = "<a href='javascript:evaluar(\"u\","+obj[2][x][0]+");' class='waves-effect waves-light btn-small blue lighten-5 '>Actualizar</a>";
					} else {
						encuestado = "<span style='color:#ff3d00;'><i class='fa fa-ban' aria-hidden='true'></i></span>";
						evaluarbtn = "<a href='javascript:evaluar(\"q\","+obj[2][x][0]+");' class='waves-effect waves-light btn-small lime accent-2' style='color:#333;'>Evaluar</a>";
					}
					cel1.innerHTML = obj[2][x][2];
					cel2.innerHTML = obj[2][x][1];
					cel3.innerHTML = obj[2][x][3];
					cel4.innerHTML = obj[2][x][4];
					cel5.innerHTML = encuestado;
					cel6.innerHTML = obj[2][x][6];
					cel7.innerHTML = evaluarbtn;
				}

			}
		});
}

function evaluar(accion,id) {
	'use strict';
	if(accion == "q"){
	 $('#contenidoModal').load('views/presentacion.php?id='+id);
	 document.getElementById('footerModal').innerHTML="<a href='javascript:evaluar(\"s\","+id+")' class='modal-close waves-effect waves-green btn-flat'>Si</a><a href='javascript:evaluar(\"n\")' class='modal-close waves-effect waves-green btn-flat'>No</a>";
     $('#modal1').modal('open');
	}
	
	if(accion == "n"){
	 $('#contenidoModal').load('views/no_encuesta.php?id='+id);
	 document.getElementById('footerModal').innerHTML="<a href='javascript:evaluar(\"s\","+id+")' class='modal-close waves-effect waves-green btn-flat'>Continuar Evaluación</a><a href='\"nn\"' class='modal-close waves-effect waves-green btn-flat' style='color:red;'>Guardar No evaluado</a>";
     $('#modal1').modal('open');
	}
	
	if(accion == "s"){
	 $('#contenidoModal').load('views/cuestionario.php?id='+id);
	 document.getElementById('footerModal').innerHTML="<a href='javascript:guardarEvaluacion()' class='modal-close waves-effect waves-green btn-flat'>Guardar</a><a href='#' class='modal-close waves-effect waves-green btn-flat ' style='color:red;'>Cancelar</a>";
     $('#modal1').modal('open');
	}
	
	if(accion == "u"){
	 $('#contenidoModal').load('views/actualizar.php?id='+id);
	 document.getElementById('footerModal').innerHTML="<a href='javascript:guardarEvaluacion()' class='modal-close waves-effect waves-green btn-flat'>Guardar</a><a href='#' class='modal-close waves-effect waves-green btn-flat ' style='color:red;'>Cancelar</a>";
     $('#modal1').modal('open');
	}
	
	return false;
}

function agregarEmpleado() {
	'use strict';
	return false;
}

/* ------------ fotografias ------------------- */

/*
    Tomar una fotografía y guardarla en un archivo
    @date 2017-11-22
    @author parzibyte
    @web parzibyte.me/blog
*/
function tieneSoporteUserMedia() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}


function guardarEvaluacion(){
    
    //revisamos los campos
    
    if( $('#q1').prop('checked')) {
        var q1 = 1;
    }else{
        var q1 = 0;
    }
    
    // question 2 ---------
    var q2 = "";
    if( $('#q2_1').prop('checked')) {
        var q2 = q2 + "1";
    }
    if( $('#q2_2').prop('checked')) {
        var q2 = q2 + "2";
    }
    if( $('#q2_3').prop('checked')) {
        var q2 = q2 + "3";
    }
    if( $('#q2_4').prop('checked')) {
        var q2 = q2 + "4";
    }
    if( $('#q2_5').prop('checked')) {
        var q2 = q2 + "5";
    }
    if( $('#q2_6').prop('checked')) {
        var q2 = q2 + "6";
    }
    if( $('#q2_7').prop('checked')) {
        var q2 = q2 + "7";
    }
    if( $('#q2_8').prop('checked')) {
        var q2 = q2 + "8";
    }
    if( $('#q2_9').prop('checked')) {
        var q2 = q2 + "9";
    }
    
    var q2_10 = $('#q2_10').val();
    var q3 = $('#q3').val();
    var q4 = $('input:radio[name=q4]:checked').val(); // todos mismo nombre, diferente id y valor
    var q4_12 = $('#q4_12').val();
    
    
	$.ajax({
		method: "POST",
		url: "scripts/guardarEvaluacion.php",
		data: {
			entrevistado:'si',
			idEmpleado:$('#idEmpleado').val(),
			q1:q1,
			q2:q2,
			q2_10:q2_10,
			q3:q3,
			q4:q4,
			q4_12:q4_12,
			ineFront:fotos[0],
			ineBack:fotos[1],
			empleadoFoto:fotos[2]
		}
	})
		.done(function (msg) {
            alert(msg);
		    cargaInfoCCT();
		});
	
	
    return false;
}