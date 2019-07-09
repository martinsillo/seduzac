// login
function login() {
    'use strict';
	console.log("called");
     $.ajax({
		method: "POST",
		url: "scripts/login.php",
		data: {
            usuario: $('#usuario').val(),
            clave: $('#clave').val()
			
		}
	})
		.done(function (msg) {
   
         var obj = jQuery.parseJSON(msg);
         if(obj[0] == 1){
             location.href="main.php";
         }else{
             alert(obj[1]);
         }
     
		});
    return false;
}
