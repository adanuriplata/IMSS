$(document).ready(function(){
    $("#gastoEnergetico").change(function(){
            var valor = $(this).val();
     $(".fa").html(valor);

//VAriables  edad peso
var pesoHabitu=$("#pesoHab").val();
var estaturaHB=$("#estatura").val();
     //GEB OMS
if (edad<=3) {
	var gebOMS = (61 * pesoHabitu) - 51;

}
if (edad>=4 && edad<=10) {
	var gebOMS = (22.5 * pesoHabitu) + 499;

}
if (edad>=11 && edad<=18) {
	var gebOMS = (12.2 * pesoHabitu)+ 746;

}
if (edad>=19 && edad<=30) {
	var gebOMS = (14.7 * pesoHabitu) + 496;

}
if (edad>=31 && edad<=60) {
	var gebOMS = (8.7 * pesoHabitu) + 829;

}
if (edad>61) {
	var gebOMS = (10.5 * pesoHabitu) + 596;

}

     $("#geb1").val(gebOMS);



     //GEB H.B

var gebHBHB = 665.1 + (9.565 * pesoHabitu) + (1.85 * (estaturaHB * 100)) - (4.68 * edad);
     $("#geb2").val(gebHBHB);

     // geb Owen

     var gebOW = 795 + (7.18 * pesoHabitu);
		$("#geb3").val(gebOW);     


		//GEB VALENCIA

if (edad<=30) {
	var gebVAL = (11.02 * pesoHabitu) + 679;

}
if (edad>=31 && edad<=60) {
	var gebVAL = (10.92 * pesoHabitu) + 677;

}
if (edad>61) {
	var gebVAL = (10.98 * pesoHabitu) + 520;

}

     $("#geb4").val(gebVAL);


     //GEB MSJ

     var gebMSJ = (9.99 * pesoHabitu) + (6.25 * (estaturaHB * 100)) - (4.92 * edad) - 161;
     $("#geb5").val(gebMSJ);


     //GET OMS
     	var getOMS = (gebOMS * 1.1) * valor;
     $("#get1").val(getOMS);
     // Get
     var getOMS = (gebOMS * 1.1) * valor;
     $("#get2").val(getOMS);
     //GET
     var getHBHB = (gebHBHB * 1.1) * valor;
     $("#get3").val(getHBHB);
     //GET VALENCIA
     var getVAL = (gebVAL * 1.1) * valor;
     $("#get4").val(getVAL);
     //GET MSJ
      var getMSJ = (gebMSJ * 1.1) * valor;
     $("#get5").val(getMSJ);
     
});
});