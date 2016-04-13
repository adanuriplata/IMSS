$(document).ready(function(){
            $("#genero").dropdown();
            $("#miembros").dropdown();
            $("#ocupacion").dropdown();
            $("#escolaridad").dropdown();

            $("#pesoAc").keyup(function(){
                var peso=$("#pesoAc").val();
                var estatura=$("#estatura").keyup().val();
                var pesoTeorico=21.5*Math.pow(estatura,2);
                var porPesoT=(peso/pesoTeorico)*100;
                $("#porPesoT").html(porPesoT.toFixed(2)+" "+"%");

                var pesoHab=$("#pesoHab").keyup().val();
                var porPesoT=(peso/pesoHab)*100;
                $("#porPesoHab").html(porPesoT.toFixed(2)+" "+"%");

                var ppci=(peso/pesoTeorico)*100;
                $("#ppci").html(ppci.toFixed(2)+" "+"%");
            });

            $("#estatura").keyup(function(){
                var estatura=$("#estatura").val();
                var pesoTeorico=21.5*Math.pow(estatura,2);
                var rangoInf=18.5*Math.pow(estatura,2);
                var rangoSup=24.9*Math.pow(estatura,2);
                $("#PesoTeorico").html(pesoTeorico.toFixed(2)+" "+"Kg's");
                $("#RangoInferior").html(rangoInf.toFixed(2)+" "+"Kg's");
                $("#RangoSuperior").html(rangoSup.toFixed(2)+" "+"Kg's");
                $("#pesoAc").keyup(function(){
                    var pesoAc=$("#pesoAc").val();
                    var imc=pesoAc/Math.pow(estatura,2);
                    $("#imc").html(imc.toFixed(2)+" "+"Kg's/m");
                });
            });
            $("#cintura").keyup(function(){
                var cintura=$("#cintura").val();
                $("#cadera").keyup(function(){
                    var cadera=$("#cadera").val();
                    $("#icc").html(cintura/cadera);
                });
            });
            $('.checkbox').checkbox();

            $('.message .close')
                    .on('click', function() {
                        $(this)
                                .closest('.message')
                                .transition('fade')
                        ;
                    })
            ;
        });