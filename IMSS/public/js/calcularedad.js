$(document).ready(function(){

	$( "#anio" ).change(function() {
   var dia=$("#dia").val();
            var mes=$("#mes").val();
            var ano=$("#anio").val();

            	fecha_hoy = new Date();
ahora_ano = fecha_hoy.getYear();
ahora_mes = fecha_hoy.getMonth();
ahora_dia = fecha_hoy.getDate();
edad = (ahora_ano + 1900) - ano;
	
	if ( ahora_mes < (mes - 1)){
	  edad--;
	}
	if (((mes - 1) == ahora_mes) && (ahora_dia < dia)){ 
	  edad--;
	}
	if (edad > 1900){
		edad -= 1900;
	}
	$("#edad").val(edad);
});
          
        });
