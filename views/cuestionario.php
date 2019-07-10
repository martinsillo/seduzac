<h4>Cuestionario</h4>
<p>1. Su clave de trabajo corresponde con la funcion que realiza?</p>
 <div class="switch">
    <label>
    No
      <input type="checkbox" id="q1">
      <span class="lever"></span>
    Si
    </label>
  </div>
<hr>
<p>2. Con que servicios cuenta este centro laboral </p>
<div class="row">
    <div class="col s6">
        <p>
            <label>
                <input type="checkbox" id="q2_1"/>
                <span>Agua Potable</span>   
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="q2_2"/>
                <span>Baños</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="q2_3"/>
                <span>Cerco Perimetral</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="q2_4"/>
                <span>Computadoras</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="q2_5"/>
                <span>Domo</span>
            </label>
        </p>
    </div>
    <div class="col s6">
        <p>
            <label>
                <input type="checkbox" id="q2_6"/>
                <span>Drenaje</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="q2_7"/>
                <span>Electricidad</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox"  id="q2_8"/>
                <span>Internet</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id="q2_9"/>
                <span>Rampas</span>
            </label>
		</p>
          <p>
            <input id="email_inline" type="email" class="validate" name="q2_10">
            <label for="q10_otro">Otro</label>  
          </p>
        
    </div>
</div>
<hr>
<div class="row">
        <div class="col s12">
          3. ¿En que fecha comenzó usted, por primera vez a trabajar en la Secretaria de Eduación?: 
          <div class="input-field inline">
            <input id="email_inline" type="date" class="validate">
          </div>
        </div>
      </div>
4.¿Cuál considera usted que es la principal necesidad de este centro de trabajo?
<div class="row">
<div class="col s4">
      <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Aulas</span>
      </label>
    </p>
      <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Baños</span>
      </label>
    </p>
      <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Cerco Perimetral</span>
      </label>
    </p>
      <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Cómputo</span>
      </label>
    </p>
</div>
<div class="col s4">
      <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Domo</span>
      </label>
    </p>
     
	<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Impermeabilización</span>
      </label>
    </p>
     
	<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Internet</span>
      </label>
    </p>
     
	<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Más Personal</span>
      </label>
    </p>
     
	    </div>
<div class="col s4">
	
	<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Mobiliario</span>
      </label>
    </p>
    
	<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Pintura y Acabados</span>
      </label>
    </p>
<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Rampas</span>
      </label>
    </p>
  <p>
            <input id="email_inline" type="email" class="validate" name="q10_otro">
            <label for="q10_otro">Otro</label>  
          </p>
  
	</div>	
</div>
<hr>
5. ¿Me permite tomar una fotografía a su IFE para nuestros archivos? El manejo será confidencial y para fines exclusivamente institucionales de la SEZ.
  <div class="switch">
    <label>
    No
      <input type="checkbox" id="tomarINE"  onchange="capturarINE();">
      <span class="lever"></span>
    Si
    </label>
  </div>
<div class="row">
    <div class="col s6" id="ifeFront"></div>
    <div class="col s6" id="ifeBack"></div>
</div>
6. ¿Me permite tomar una fotografía de cuerpo entero de usted realizando su tarea laboral?
  <div class="switch">
    <label>
    No
      <input type="checkbox" id="tomarTrabajador"  onchange="capturarTrabajador();">
      <span class="lever"></span>
    Si
    </label>
  </div>
<div class="row">
    <div class="col s12" id="imgTrabajador"></div>
</div>
<hr>
<h5>Testigos</h5>

7.- El trabajador o maestro --NN-- ¿trabaja aqui?

 <div class="switch">
    <label>
    No
      <input type="checkbox" id="Trabajador" >
      <span class="lever"></span>
    Si
    </label>
  </div>


8.- ¿Que tan frecuente es su asistencia?
<div class="row">
<div class="col s3">
      <p>
      <label>
        <input name="group2" type="radio"  />
        <span>Casi siempre (más del 90%)</span>
      </label>
    </p>
</div>
<div class="col s3">
      <p>
      <label>
        <input name="group2" type="radio"  />
        <span>Es muy irregular, a veces si y aveces no (entre 50% y 90% )</span>
      </label>
    </p>
</div>
<div class="col s3">
      <p>
      <label>
        <input name="group2" type="radio"  />
        <span> Casi no viene (menos del 50%) </span>
      </label>
    </p>
</div>
<div class="col s3">
      <p>
      <label>
        <input name="group2" type="radio" />
        <span> No lo conocemos, nunca lo hemos visto </span>
      </label>
    </p>
</div>    
</div>


9.- Cumple con el horario establecido

 <div class="switch">
    <label>
    No
      <input type="checkbox" id="Trabajador" >
      <span class="lever"></span>
    Si
    </label>
  </div>



10.- Desde cuando se acuerda que trabaja aqui?
 <div class="input-field inline">
            <input id="email_inline" type="date" class="validate">
          </div>



<script>
    
var fotos = new Array("0","0","0","0");
    
function tieneSoporteUserMedia() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}            
    
function capturarINE(){
        if(document.getElementById('tomarINE').checked){
            document.getElementById('ifeFront').innerHTML = "<video id='ifeFrontVideo' width='200'></video><br><button id='boton1' onclick='generarFoto(1);' class='waves-effect waves-light btn-small'><i class='fa fa-camera' aria-hidden='true'></i> Tomar foto</button><canvas id='canvasFrontIfe' style='display: none;' width='400'></canvas>";
            document.getElementById('ifeBack').innerHTML = "<video id='ifeBackVideo' width='200'></video><br><button id='boton2' onclick='generarFoto(2);' class='waves-effect waves-light btn-small'><i class='fa fa-camera' aria-hidden='true'></i> Tomar foto</button><canvas id='canvasBackIfe' style='display: none;' width='400'></canvas>";
            
            var $video_01 = document.getElementById("ifeFrontVideo"),
                $video_02 = document.getElementById("ifeBackVideo"),
                $canvas_01 = document.getElementById("canvasFrontIfe"),
                $canvas_02 = document.getElementById("canvasBackIfe");
            if (tieneSoporteUserMedia()) {
    _getUserMedia({
            video: true
        },
        function(stream) {
            $video_01.srcObject = stream;
            $video_02.srcObject = stream;
            $video_01.play();
            $video_02.play();

           
        },
        function(error) {
            console.log(error);
        });
} else {
    alert("Lo siento. Tu navegador no soporta esta característica");
}   
            
            
        }else{
            document.getElementById('ifeFront').innerHTML = "";
            document.getElementById('ifeBack').innerHTML = ""; 
        }
      
}
    
function capturarTrabajador(){
    
      if( document.getElementById('tomarTrabajador').checked ){
            document.getElementById('imgTrabajador').innerHTML = "<video id='imgTrabajadorVideo' width='200'></video><br><button id='boton3' onclick='generarFoto(3);' class='waves-effect waves-light btn-small'><i class='fa fa-camera' aria-hidden='true'></i> Tomar foto</button><canvas id='canvasimgTrabajador' style='display: none;' width='400'></canvas>";
            var $video_03 = document.getElementById("imgTrabajadorVideo"),
                $canvas_03 = document.getElementById("canvasimgTrabajador");
                
            if (tieneSoporteUserMedia()) {
    _getUserMedia({
            video: true
        },
        function(stream) {
            $video_03.srcObject = stream;
            $video_03.play();

           
        },
        function(error) {
            console.log(error);
        });
} else {
    alert("Lo siento. Tu navegador no soporta esta característica");
}   
            
            
        }else{
             document.getElementById('imgTrabajador').innerHTML = "";
        }
    
}    
    
    
    
    
    


function generarFoto(v){
    
    switch(v){
        case 1:
            var video =  document.getElementById("ifeFrontVideo"),
                canvas = $canvas_01 = document.getElementById("canvasFrontIfe");
        break;
        case 2:
               var video =  document.getElementById("ifeBackVideo"),
                canvas = $canvas_01 = document.getElementById("canvasBackIfe");
        break;    
           case 3:
               var video =  document.getElementById("imgTrabajadorVideo"),
                canvas = $canvas_01 = document.getElementById("canvasimgTrabajador");
        break;      
    }
    
    video.pause();
 
  //Obtener contexto del canvas y dibujar sobre él
                var contexto = canvas.getContext("2d");
                canvas.width = video.videoWidth;
                canvas.height =  video.videoHeight;
                contexto.drawImage( video, 0, 0, canvas.width, canvas.height);
                var foto = canvas.toDataURL(); //Esta es la foto, en base 64
                fotos[v-1] = foto;
    
}


</script>