$(document).ready(function(){
    $("#gastoEnergetico").change(function(){
            var valor = $(this).val();
     $(".fa").html(valor);
});
});