@extends('layout-home')

<style>
    div>h4>p{
        display: inline;
    }
    #analisis>table{
        width: 600px;
    }
    th{
        width: 40px;
    }
</style>
@section('scripts')
    <script>

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

//inicio jquery de desayuno 
         $(document).ready(function(){
            var hctot=$("#hctot").val();
            var prottot=$("#prottot").val();
            var liptot=$("#liptot").val();
            var kctot=0;

            $("#rcleche").keyup(function(){
                var rcleche=$("#rcleche").val();
                var hcleche=rcleche*12;
                var proleche=rcleche*9;
                var lileche=rcleche*5;
                var kcleche=(hcleche*4)+(proleche*4)+(lileche*9);
                if (kcleche==0) {
                    kctot = 0;
                }
                else{
                 kctot = kctot + kcleche;   
                }
                
                $("#hcleche").html(hcleche);
                $("#proleche").html(proleche);
                $("#lileche").html(lileche);
                $("#kcleche").html(kcleche);
                $("#kctot").html(kctot);
            });

            $("#rccarne").keyup(function(){
                var rccarne=$("#rccarne").val();
                var hccarne=rccarne*0;
                var procarne=rccarne*7;
                var licarne=rccarne*4;
                var kccarne=(hccarne*4)+(procarne*4)+(licarne*9);
                $("#hccarne").html(hccarne);
                $("#procarne").html(procarne);
                $("#licarne").html(licarne);
                $("#kccarne").html(kccarne);
            });

            $("#rcfruta").keyup(function(){
                var rcfruta=$("#rcfruta").val();
                var hcfruta=rcfruta*15;
                var profruta=rcfruta*0;
                var lifruta=rcfruta*0;
                var kcfruta=(hcfruta*4)+(profruta*4)+(lifruta*9);
                $("#hcfruta").html(hcfruta);
                $("#profruta").html(profruta);
                $("#lifruta").html(lifruta);
                $("#kcfruta").html(kcfruta);
            });

            $("#rcvegetales").keyup(function(){
                var rcvegetales=$("#rcvegetales").val();
                var hcvegetales=rcvegetales*4;
                var provegetales=rcvegetales*2;
                var livegetales=rcvegetales*0;
                var kcvegetales=(hcvegetales*4)+(provegetales*4)+(livegetales*9);
                $("#hcvegetales").html(hcvegetales);
                $("#provegetales").html(provegetales);
                $("#livegetales").html(livegetales);
                $("#kcvegetales").html(kcvegetales);
            });

            $("#rccereal").keyup(function(){
                var rccereal=$("#rccereal").val();
                var hccereal=rccereal*15;
                var procereal=rccereal*2;
                var licereal=rccereal*0;
                var kccereal=(hccereal*4)+(procereal*4)+(licereal*9);
                $("#hccereal").html(hccereal);
                $("#procereal").html(procereal);
                $("#licereal").html(licereal);
                $("#kccereal").html(kccereal);
            });

            $("#rcleguminosas").keyup(function(){
                var rcleguminosas=$("#rcleguminosas").val();
                var hcleguminosas=rcleguminosas*20;
                var proleguminosas=rcleguminosas*8;
                var lileguminosas=rcleguminosas*1;
                var kcleguminosas=(hcleguminosas*4)+(proleguminosas*4)+(lileguminosas*9);
                $("#hcleguminosas").html(hcleguminosas);
                $("#proleguminosas").html(proleguminosas);
                $("#lileguminosas").html(lileguminosas);
                $("#kcleguminosas").html(kcleguminosas);
            });

            $("#rcgrasas").keyup(function(){
                var rcgrasas=$("#rcgrasas").val();
                var hcgrasas=rcgrasas*0;
                var prograsas=rcgrasas*0;
                var ligrasas=rcgrasas*5;
                var kcgrasas=(hcgrasas*4)+(prograsas*4)+(ligrasas*9);
                $("#hcgrasas").html(hcgrasas);
                $("#prograsas").html(prograsas);
                $("#ligrasas").html(ligrasas);
                $("#kcgrasas").html(kcgrasas);
            });

            $("#rcazucar").keyup(function(){
                var rcazucar=$("#rcazucar").val();
                var hcazucar=rcazucar*10;
                var proazucar=rcazucar*0;
                var liazucar=rcazucar*0;
                var kcazucar=(hcazucar*4)+(proazucar*4)+(liazucar*9);
                $("#hcazucar").html(hcazucar);
                $("#proazucar").html(proazucar);
                $("#liazucar").html(liazucar);
                $("#kcazucar").html(kcazucar);
            });



        });
// temrina calculos desayuno

//inicia calculos comida
$(document).ready(function(){
            var hctot=$("#hctot").val();
            var prottot=$("#prottot").val();
            var liptot=$("#liptot").val();
            var kctot=0;

            $("#rcleche2").keyup(function(){
                var rcleche2=$("#rcleche2").val();
                var hcleche2=rcleche2*12;
                var proleche2=rcleche2*9;
                var lileche2=rcleche2*5;
                var kcleche2=(hcleche2*4)+(proleche2*4)+(lileche2*9);
                if (kcleche2==0) {
                    kctot = 0;
                }
                else{
                 kctot = kctot + kcleche2;   
                }
                
                $("#hcleche2").html(hcleche2);
                $("#proleche2").html(proleche2);
                $("#lileche2").html(lileche2);
                $("#kcleche2").html(kcleche2);
                $("#kctot2").html(kctot2);
            });

            $("#rccarne2").keyup(function(){
                var rccarne2=$("#rccarne2").val();
                var hccarne2=rccarne2*0;
                var procarne2=rccarne2*7;
                var licarne2=rccarne2*4;
                var kccarne2=(hccarne2*4)+(procarne2*4)+(licarne2*9);
                $("#hccarne2").html(hccarne2);
                $("#procarne2").html(procarne2);
                $("#licarne2").html(licarne2);
                $("#kccarne2").html(kccarne2);
            });

            $("#rcfruta2").keyup(function(){
                var rcfruta2=$("#rcfruta2").val();
                var hcfruta2=rcfruta2*15;
                var profruta2=rcfruta2*0;
                var lifruta2=rcfruta2*0;
                var kcfruta2=(hcfruta2*4)+(profruta2*4)+(lifruta2*9);
                $("#hcfruta2").html(hcfruta2);
                $("#profruta2").html(profruta2);
                $("#lifruta2").html(lifruta2);
                $("#kcfruta2").html(kcfruta2);
            });

            $("#rcvegetales2").keyup(function(){
                var rcvegetales2=$("#rcvegetales2").val();
                var hcvegetales2=rcvegetales2*4;
                var provegetales2=rcvegetales2*2;
                var livegetales2=rcvegetales2*0;
                var kcvegetales2=(hcvegetales2*4)+(provegetales2*4)+(livegetales2*9);
                $("#hcvegetales2").html(hcvegetales2);
                $("#provegetales2").html(provegetales2);
                $("#livegetales2").html(livegetales2);
                $("#kcvegetales2").html(kcvegetales2);
            });

            $("#rccereal2").keyup(function(){
                var rccereal2=$("#rccereal2").val();
                var hccereal2=rccereal2*15;
                var procereal2=rccereal2*2;
                var licereal2=rccereal2*0;
                var kccereal2=(hccereal2*4)+(procereal2*4)+(licereal2*9);
                $("#hccereal2").html(hccereal2);
                $("#procereal2").html(procereal2);
                $("#licereal2").html(licereal2);
                $("#kccereal2").html(kccereal2);
            });

            $("#rcleguminosas2").keyup(function(){
                var rcleguminosas2=$("#rcleguminosas2").val();
                var hcleguminosas2=rcleguminosas2*20;
                var proleguminosas2=rcleguminosas2*8;
                var lileguminosas2=rcleguminosas2*1;
                var kcleguminosas2=(hcleguminosas2*4)+(proleguminosas2*4)+(lileguminosas2*9);
                $("#hcleguminosas2").html(hcleguminosas2);
                $("#proleguminosas2").html(proleguminosas2);
                $("#lileguminosas2").html(lileguminosas2);
                $("#kcleguminosas2").html(kcleguminosas2);
            });

            $("#rcgrasas2").keyup(function(){
                var rcgrasas2=$("#rcgrasas2").val();
                var hcgrasas2=rcgrasas2*0;
                var prograsas2=rcgrasas2*0;
                var ligrasas2=rcgrasas2*5;
                var kcgrasas2=(hcgrasas2*4)+(prograsas2*4)+(ligrasas2*9);
                $("#hcgrasas2").html(hcgrasas2);
                $("#prograsas2").html(prograsas2);
                $("#ligrasas2").html(ligrasas2);
                $("#kcgrasas2").html(kcgrasas2);
            });

            $("#rcazucar2").keyup(function(){
                var rcazucar2=$("#rcazucar2").val();
                var hcazucar2=rcazucar2*10;
                var proazucar2=rcazucar2*0;
                var liazucar2=rcazucar2*0;
                var kcazucar2=(hcazucar2*4)+(proazucar2*4)+(liazucar2*9);
                $("#hcazucar2").html(hcazucar2);
                $("#proazucar2").html(proazucar2);
                $("#liazucar2").html(liazucar2);
                $("#kcazucar2").html(kcazucar2);
            });

        });
        // termina calculos comida
//inicia calculos cena
$(document).ready(function(){
            var hctot=$("#hctot").val();
            var prottot=$("#prottot").val();
            var liptot=$("#liptot").val();
            var kctot=0;

            $("#rcleche3").keyup(function(){
                var rcleche3=$("#rcleche3").val();
                var hcleche3=rcleche3*12;
                var proleche3=rcleche3*9;
                var lileche3=rcleche3*5;
                var kcleche3=(hcleche3*4)+(proleche3*4)+(lileche3*9);
                if (kcleche3==0) {
                    kctot = 0;
                }
                else{
                 kctot = kctot + kcleche3;   
                }
                
                $("#hcleche3").html(hcleche3);
                $("#proleche3").html(proleche3);
                $("#lileche3").html(lileche3);
                $("#kcleche3").html(kcleche3);
                $("#kctot").html(kctot);
            });

            $("#rccarne3").keyup(function(){
                var rccarne3=$("#rccarne3").val();
                var hccarne3=rccarne3*0;
                var procarne3=rccarne3*7;
                var licarne3=rccarne3*4;
                var kccarne3=(hccarne3*4)+(procarne3*4)+(licarne3*9);
                $("#hccarne3").html(hccarne3);
                $("#procarne3").html(procarne3);
                $("#licarne3").html(licarne3);
                $("#kccarne3").html(kccarne3);
            });

            $("#rcfruta3").keyup(function(){
                var rcfruta3=$("#rcfruta3").val();
                var hcfruta3=rcfruta3*15;
                var profruta3=rcfruta3*0;
                var lifruta3=rcfruta3*0;
                var kcfruta3=(hcfruta3*4)+(profruta3*4)+(lifruta3*9);
                $("#hcfruta3").html(hcfruta3);
                $("#profruta3").html(profruta3);
                $("#lifruta3").html(lifruta3);
                $("#kcfruta3").html(kcfruta3);
            });

            $("#rcvegetales3").keyup(function(){
                var rcvegetales3=$("#rcvegetales3").val();
                var hcvegetales3=rcvegetales3*4;
                var provegetales3=rcvegetales3*2;
                var livegetales3=rcvegetales3*0;
                var kcvegetales3=(hcvegetales3*4)+(provegetales3*4)+(livegetales3*9);
                $("#hcvegetales3").html(hcvegetales3);
                $("#provegetales3").html(provegetales3);
                $("#livegetales3").html(livegetales3);
                $("#kcvegetales3").html(kcvegetales3);
            });

            $("#rccereal3").keyup(function(){
                var rccereal3=$("#rccereal3").val();
                var hccereal3=rccereal3*15;
                var procereal3=rccereal3*2;
                var licereal3=rccereal3*0;
                var kccereal3=(hccereal3*4)+(procereal3*4)+(licereal3*9);
                $("#hccereal3").html(hccereal3);
                $("#procereal3").html(procereal3);
                $("#licereal3").html(licereal3);
                $("#kccereal3").html(kccereal3);
            });

            $("#rcleguminosas3").keyup(function(){
                var rcleguminosas3=$("#rcleguminosas3").val();
                var hcleguminosas3=rcleguminosas3*20;
                var proleguminosas3=rcleguminosas3*8;
                var lileguminosas3=rcleguminosas3*1;
                var kcleguminosas3=(hcleguminosas3*4)+(proleguminosas3*4)+(lileguminosas3*9);
                $("#hcleguminosas3").html(hcleguminosas3);
                $("#proleguminosas3").html(proleguminosas3);
                $("#lileguminosas3").html(lileguminosas3);
                $("#kcleguminosas3").html(kcleguminosas3);
            });

            $("#rcgrasas3").keyup(function(){
                var rcgrasas3=$("#rcgrasas3").val();
                var hcgrasas3=rcgrasas3*0;
                var prograsas3=rcgrasas3*0;
                var ligrasas3=rcgrasas3*5;
                var kcgrasas3=(hcgrasas3*4)+(prograsas3*4)+(ligrasas3*9);
                $("#hcgrasas3").html(hcgrasas3);
                $("#prograsas3").html(prograsas3);
                $("#ligrasas3").html(ligrasas3);
                $("#kcgrasas3").html(kcgrasas3);
            });

            $("#rcazucar3").keyup(function(){
                var rcazucar3=$("#rcazucar3").val();
                var hcazucar3=rcazucar3*10;
                var proazucar3=rcazucar3*0;
                var liazucar3=rcazucar3*0;
                var kcazucar3=(hcazucar3*4)+(proazucar3*4)+(liazucar3*9);
                $("#hcazucar3").html(hcazucar3);
                $("#proazucar3").html(proazucar3);
                $("#liazucar3").html(liazucar3);
                $("#kcazucar3").html(kcazucar3);
            });

        });
        //temrina calculos cena



        // inicia grafico de pastel desayuno

        $(function () {
    $('#graficapastel1').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafico Desayuno'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ingesta',
            data: [
                ['H. de C.', 20.5],
                {
                    name: 'Proteina',
                    y: 21.5,
                    sliced: true,
                    selected: true
                },
                ['Lipidos', 10.5],
                
            ]
        }]
    });
});
        // fin grafica pastel desayuno

        // inicia grafica pastel comida
        $(function () {
    $('#graficapastel2').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafico Comida'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ingesta',
            data: [
                ['H. de C.', 45.0],
                {
                    name: 'Proteina',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Lipidos', 8.5],
                
            ]
        }]
    });
});

        //inicia grafica pastel cena

        $(function () {
    $('#graficapastel3').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafico Cena'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ingesta',
            data: [
                ['H. de C.', 4.0],
                {
                    name: 'Proteina',
                    y: 10.8,
                    sliced: true,
                    selected: true
                },
                ['Lipidos', 2.5],
                
            ]
        }]
    });
});
        // termina grafica pastel cena


//jquery grafico historial peso
    var algo=$("#estatura").keyup(function(){
                var nombre=$("#nombre").val();
            });

    $(function () {
    $('#grafica').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Historial de Peso'
        },
        xAxis: {
            categories: ['Hoy', 'ultima consulta', '', '', '']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Peso kg'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'Vicente',
            data: [60,75]
        }]
    });
});


    </script>
@endsection
@section('contenido')

    <div class="ui container">
        <h1 class="ui dividing header">
            <i class="doctor icon"></i> Nueva consulta
        </h1>
        <div class="ui attached message">
            <div class="header">
                Instituto Mexicano Del Seguro Social <br>
                Hospital General Regional #36 <br>
                Departamento de Nutrición Y Dietetica <br>
            </div>
            <p></p>
        </div>
        <form action="{{url('/historial/guardar')}}" class="ui form" method="post">
            <div class="ui stacked segment">
            {!! csrf_field() !!}
                <div class="fields">
                    <div class="field">
                        <label>Nombre</label>
                        <input type="text" name="Nombre" id="nombre" placeholder="Nombre(s)">
                    </div>
                    <div class="field">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="Paterno" placeholder="Apellido Paterno">
                    </div>
                    <div class="field">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="Materno" placeholder="Apellido Materno">
                    </div>
                    <div class="field">
                        <label for="">NSS</label>
                        <input type="text" name="Nss" placeholder="NSS">
                    </div>
                </div>
                <br>
                <strong>Fecha de Nacimiento</strong>
                <br><br>
                <div class="fields" >

                    <div class="field">
                        <label>Dia</label>
                        <select class="" name="dia">
                            @for($i=1;$i<=31;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="field">
                        <label for="">Mes</label>
                        <select class="" name="mes">
                            @for($i=1;$i<=12;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="field">
                        <label for="">Año</label>
                        <select class="" name="anio">
                            @for($i=2016;$i>=1930;$i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>Sexo</label>
                        <select class="four wide field" id="genero" name="Genero">
                            <option value="1">Masculino</option>
                            <option value="0">Femenino</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="">Escolaridad</label>
                        <select name="Escolaridad" id="escolaridad" class="three wide field">
                            <option value="primaria">Primaria</option>
                            <option value="secundaria">Secundaria</option>
                            <option value="bachiller">Bachiller</option>
                            <option value="tecnico">Tecnico</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="">Ocupación</label>
                        <select name="Ocupacion" id="ocupacion" class="three wide field">
                            <option value="pensionado">Pensionado(a)</option>
                            <option value="comerciante">Comerciante</option>
                            <option value="ama de casa">Ama de casa</option>
                            <option value="empleado">Empleado(a)</option>
                            <option value="campo">Campo</option>
                        </select>
                    </div>
                </div>
                <br>
                <strong>N° de Familia: </strong>
                <br><br>
                <div class="fields">
                    <div class="field">
                        <label for="">Adultos</label>
                        <input type="text" class="" name="adultos">
                    </div>
                    <div class="field">
                        <label for="">Niños</label>
                        <input type="text" class="" name="ninios">
                    </div>
                </div>
            </div>
            <div class="ui stacked segment">
              <div class="ui four column stackable divided grid">
                  <div class="stretched row">
                        <div class="column">
                            <div class="ui segment">
                                <div class="field">
                                    <label for="">Estatura</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" name="Estatura" id="estatura">
                                        <div class="ui basic label">
                                            m
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Peso Habitual</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" id="pesoHab" name="PesoHabitual">
                                        <div class="ui basic label">
                                            kg's
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Peso Actual</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" id="pesoAc" name="PesoActual">
                                        <div class="ui basic label">
                                            kg's
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Cintura</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" name="Cintura" id="cintura">
                                        <div class="ui basic label">
                                            cm's
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Cadera</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" name="Cadera" id="cadera">
                                        <div class="ui basic label">
                                            cm's
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Perimetro Abdominal</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" name="PerimetroAbdominal">
                                        <div class="ui basic label">
                                            cm's
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Circunferencia Muñeca</label>
                                    <div class="ui right labeled input">
                                        <input type="text" class="three wide field" name="CircunferenciaMuneca">
                                        <div class="ui basic label">
                                            cm's
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">Miembros amputados</label>
                                    <select  class="two wide field" id="miembros" name="MiembrosAmputados">
                                        <option value="0">Ninguno</option>
                                        @foreach($miembrosAmp as $ma)
                                            <option value="{{$ma->peso}}">{{$ma->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="">Ejercicio</label>
                                    <select name="ejercicio" id="" class="">
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="twelve wide column">
                            <div class="two column row">
                                <div class="column">
                                    <div id="grafica" class="ui segment"> </div>
                                </div>
                                <hr>
                                <div class="column">
                                    <div class="ui fluid segment">
                                        <div class="field">
                                            <h4>Peso teorico ideal: <p id="PesoTeorico"></p> </h4>
                                        </div>
                                        <div class="field">
                                            <h4> Rango inferior: <p id="RangoInferior"></p></h4>
                                        </div>
                                        <div class="field">
                                            <h4>Rango superior: <p id="RangoSuperior"></p></h4>
                                        </div>
                                        <div class="field">
                                            <h4>% De peso teorico: <p id="porPesoT"></p></h4>
                                        </div>
                                        <div class="field">
                                            <h4>% De peso habitual: <p id="porPesoHab"></p></h4>
                                        </div>
                                        <div class="field">
                                            <h4>IMC: <p id="imc"></p></h4>
                                        </div>
                                        <div class="field">
                                            <h4>P.P.C.I : <p id="ppci"></p> </h4>
                                        </div>
                                        <div class="field">
                                            <h4>Clasificación: <p></p> </h4>
                                        </div>

                                        <div class="field">
                                            <h4>I.C.C : <p id="icc"></p> </h4>
                                        </div>

                                        <div class="field">
                                            <h4>Peso corregido: <p></p></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
        </div>

         <div class="ui stacked segment">
             <h2 class="ui dividing center aligned header">
                 Antecedentes Clinicos
             </h2>
             <div class="ui equal width stretched stackable grid">

                 <div class="column">
                     <h4>Nutricionales</h4>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Bajo Peso</label>
                             <input type="checkbox" name="antecedentes[]" value="BajoPeso" >
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Sobrepeso</label>
                             <input type="checkbox" name="antecedentes[]" value="Sobrepeso">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Desnutrición</label>
                             <input type="checkbox" name="antecedentes[]" value="Desnutricion">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Obesidad</label>
                             <input type="checkbox" name="antecedentes[]" value="Obesidad">
                         </div>
                     </div>
                 </div>
                 <div class="column">
                     <h4>Patologicos</h4>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Hipertension</label>
                             <input type="checkbox" name="antecedentes[]" value="hipertension">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Diabetes</label>
                             <input type="checkbox" name="antecedentes[]" value="diabetes">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Cardiopatia(s)</label>
                             <input type="checkbox" name="antecedentes[]" value="cardiopatia">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Neuropatia(s)</label>
                             <input type="checkbox" name="antecedentes[]" value="neuropatia">
                         </div>
                     </div>
                 </div>
                 <div class="column">
                     <h4>Hereditarios</h4>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Cancer</label>
                             <input type="checkbox" name="antecedentes[]" value="cancer">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Gastritis</label>
                             <input type="checkbox" name="antecedentes[]" value="gastritis">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Colitis</label>
                             <input type="checkbox" name="antecedentes[]" value="colitis">
                         </div>
                     </div>
                 </div>
                 <div class="column">
                     <h4>Otros</h4>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Alcoholismo</label>
                             <input type="checkbox" name="antecedentes[]" value="alcoholismo">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Tabaquismo</label>
                             <input type="checkbox" name="antecedentes[]" value="tabaquismo">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Alergias</label>
                             <input type="checkbox" name="antecedentes[]" value="alergias">
                         </div>
                     </div>
                     <div class="field">
                         <div class="ui checkbox">
                             <label for="">Medicamentos</label>
                             <input type="checkbox" name="antecedentes[]" value="medicamentos">
                         </div>
                     </div>

                 </div>
             </div>
         </div>
         <br>
         <div class="ui stacked segment" id="analisis">
             <h2 class="ui center aligned dividing header">Analisis de Laboratorio</h2>
             <h3>Perfil Hematologico</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th>Referencia</th>
                         <th>Unidades</th>
                         <th>Dato</th>
                         <th>Diagnostico</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>Hemoglobina</td>
                         <td>12.0-16.0</td>
                         <td>g/dl</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Hematrocitos</td>
                         <td>36.0-47</td>
                         <td>%</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Leucocitos</td>
                         <td>4000-11200</td>
                         <td>cel/mm</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                 </tbody>
             </table>
             <h3>Perfil Bioquímico</h3>
             <table class="ui small celled definition table">
                 <thead>
                     <tr>
                         <th></th>
                         <th>Referencia</th>
                         <th>Unidades</th>
                         <th>Dato</th>
                         <th>Diagnostico</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>Glucosa</td>
                         <td>65-110</td>
                         <td>mg/dl</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Urea</td>
                         <td>14.0-44</td>
                         <td>mg/dl</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Acido Urico</td>
                         <td>3.4-7.0</td>
                         <td>mg/dl</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                     <tr>
                         <td>Creatinina</td>
                         <td>0.5-1.6</td>
                         <td>mg/dl</td>
                         <td><input type="text"></td>
                         <td></td>
                     </tr>
                 </tbody>
             </table>
             <h3>Protenias</h3>
             <table class="ui small celled definition table">
                 <thead>
                 <tr>
                     <th></th>
                     <th>Referencia</th>
                     <th>Unidades</th>
                     <th>Dato</th>
                     <th>Diagnostico</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Proteinas <br>totales</td>
                     <td>6.4-8.3</td>
                     <td>g/dl</td>
                     <td><input type="text"></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td>Albumina</td>
                     <td>3.4- 5.0</td>
                     <td>g/dl</td>
                     <td><input type="text"></td>
                     <td></td>
                 </tr>
                 </tbody>
             </table>
             <h3>Perfil de Lipidos</h3>
             <table class="ui small celled definition table">
                 <thead>
                 <tr>
                     <th></th>
                     <th>Referencia</th>
                     <th>Unidades</th>
                     <th>Dato</th>
                     <th>Diagnostico</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Colesterol</td>
                     <td>140-200</td>
                     <td>mg/dl</td>
                     <td><input type="text"></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td>Trigliceridos</td>
                     <td>40-160</td>
                     <td>mg/dl</td>
                     <td><input type="text"></td>
                     <td></td>
                 </tr>
                 </tbody>
             </table>
         </div>

 <!--Inicia Recordatorio de 24 hrs inicia dieta desayuno comida cena  -->




<div class="ui stacked segment">
<h2 class="ui dividing center aligned header">
                 Comidas
             </h2>
              <div class="ui three column stackable divided grid">
                  <div class="stretched row">
                  <div class="nine wide column">
                        <div class="column">
                            <div class="ui segment">
                                <h3><i class="spoon icon"></i>Desayuno</h3>
             <table class="ui small celled definition table">
                 <thead>
                 <tr>
                     <th></th>
                     <th>RAC</th>
                     <th>H.C</th>
                     <th>Prot</th>
                     <th>Lip</th>
                     <th>Kcals</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Leche</td>
                     <td><input type="text" id="rcleche"></td>
                     <td><p id="hcleche"></p></td>
                     <td><p id="proleche"></p></td>
                     <td><p id="lileche"></p></td>
                     <td><p id="kcleche"></p></td>
                 </tr>
                 <tr>
                     <td>Carne</td>
                     <td><input type="text" id="rccarne"></td>
                     <td><p id="hccarne"></p></td>
                     <td><p id="procarne"></p></td>
                     <td><p id="licarne"></p></td>
                     <td><p id="kccarne"></p></td>
                 </tr> 
                 <tr>
                     <td>Fruta</td>
                     <td><input type="text" id="rcfruta"></td>
                     <td><p id="hcfruta"></p></td>
                     <td><p id="profruta"></p></td>
                     <td><p id="lifruta"></p></td>
                     <td><p id="kcfruta"></p></td>
                 </tr> 
                 <tr>
                     <td>Vegetales</td>
                     <td><input type="text" id="rcvegetales"></td>
                     <td><p id="hcvegetales"></p></td>
                     <td><p id="provegetales"></p></td>
                     <td><p id="livegetales"></p></td>
                     <td><p id="kcvegetales"></p></td>
                 </tr>
                 <tr>
                     <td>Cer. y tub.</td>
                     <td><input type="text" id="rccereal"></td>
                     <td><p id="hccereal"></p></td>
                     <td><p id="procereal"></p></td>
                     <td><p id="licereal"></p></td>
                     <td><p id="kccereal"></p></td>
                 </tr>
                 <tr>
                     <td>Leguminosas</td>
                     <td><input type="text" id="rcleguminosas"></td>
                     <td><p id="hcleguminosas"></p></td>
                     <td><p id="proleguminosas"></p></td>
                     <td><p id="lileguminosas"></p></td>
                     <td><p id="kcleguminosas"></p></td>
                 </tr>
                 <tr>
                     <td>Grasas</td>
                     <td><input type="text" id="rcgrasas"></td>
                     <td><p id="hcgrasas"></p></td>
                     <td><p id="prograsas"></p></td>
                     <td><p id="ligrasas"></p></td>
                     <td><p id="kcgrasas"></p></td>
                 </tr>
                 <tr>
                     <td>Azucar</td>
                     <td><input type="text" id="rcazucar"></td>
                     <td><p id="hcazucar"></p></td>
                     <td><p id="proazucar"></p></td>
                     <td><p id="liazucar"></p></td>
                     <td><p id="kcazucar"></p></td>
                 </tr>
                 <tr>
                     <td>Total</td>
                     <td></td>
                     <td><p id="hctot"></p></td>
                     <td><p id="prottot"></p></td>
                     <td><p id="liptot"></p></td>
                     <td><p id="kctot"></p></td>
                 </tr>
                 </tbody>
             </table>
             </div>
         </div>
    </div>
                        <div class="seven wide column">
                            <div class="two column row">
                            <div class="column">
                                <div class="ui segment">
                                <h3>Totales</h3>
                                    <table class="ui small celled definition table">
                                       <thead>
                                         <tr>
                                            <th></th>
                                             <th>%</th>
                                             <th>GRS</th>
                                             <th>KCALS</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td>H. de C.</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr>
                                         <tr>
                                             <td>Proteina</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr> 
                                         <tr>
                                             <td>Lipidos</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr> 
                                     
                                         </tbody>
                                  </table>
                                    </div>
                                </div>
                                <div class="column">
                                    <div id="graficapastel1" class="ui segment"> </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                  </div>
              </div>
<!-- trmina desayuno -->

              <!-- inicia comida -->
<h4 class="ui horizontal divider header">-----</h4>
<div class="ui three column stackable divided grid">
                  <div class="stretched row">
                  <div class="nine wide column">
                        <div class="column">
                            <div class="ui segment">
                                <h3><i class="food icon"></i>Comida</h3>
             <table class="ui small celled definition table">
                 <thead>
                 <tr>
                     <th></th>
                     <th>RAC</th>
                     <th>H.C</th>
                     <th>Prot</th>
                     <th>Lip</th>
                     <th>Kcals</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Leche</td>
                     <td><input type="text" id="rcleche2"></td>
                     <td><p id="hcleche2"></p></td>
                     <td><p id="proleche2"></p></td>
                     <td><p id="lileche2"></p></td>
                     <td><p id="kcleche2"></p></td>
                 </tr>
                 <tr>
                     <td>Carne</td>
                     <td><input type="text" id="rccarne2"></td>
                     <td><p id="hccarne2"></p></td>
                     <td><p id="procarne2"></p></td>
                     <td><p id="licarne2"></p></td>
                     <td><p id="kccarne2"></p></td>
                 </tr> 
                 <tr>
                     <td>Fruta</td>
                     <td><input type="text" id="rcfruta2"></td>
                     <td><p id="hcfruta2"></p></td>
                     <td><p id="profruta2"></p></td>
                     <td><p id="lifruta2"></p></td>
                     <td><p id="kcfruta2"></p></td>
                 </tr> 
                 <tr>
                     <td>Vegetales</td>
                     <td><input type="text" id="rcvegetales2"></td>
                     <td><p id="hcvegetales2"></p></td>
                     <td><p id="provegetales2"></p></td>
                     <td><p id="livegetales2"></p></td>
                     <td><p id="kcvegetales2"></p></td>
                 </tr>
                 <tr>
                     <td>Cer. y tub.</td>
                     <td><input type="text" id="rccereal2"></td>
                     <td><p id="hccereal2"></p></td>
                     <td><p id="procereal2"></p></td>
                     <td><p id="licereal2"></p></td>
                     <td><p id="kccereal2"></p></td>
                 </tr>
                 <tr>
                     <td>Leguminosas</td>
                     <td><input type="text" id="rcleguminosas2"></td>
                     <td><p id="hcleguminosas2"></p></td>
                     <td><p id="proleguminosas2"></p></td>
                     <td><p id="lileguminosas2"></p></td>
                     <td><p id="kcleguminosas2"></p></td>
                 </tr>
                 <tr>
                     <td>Grasas</td>
                     <td><input type="text" id="rcgrasas2"></td>
                     <td><p id="hcgrasas2"></p></td>
                     <td><p id="prograsas2"></p></td>
                     <td><p id="ligrasas2"></p></td>
                     <td><p id="kcgrasas2"></p></td>
                 </tr>
                 <tr>
                     <td>Azucar</td>
                     <td><input type="text" id="rcazucar2"></td>
                     <td><p id="hcazucar2"></p></td>
                     <td><p id="proazucar2"></p></td>
                     <td><p id="liazucar2"></p></td>
                     <td><p id="kcazucar2"></p></td>
                 </tr>
                 <tr>
                     <td>Total</td>
                     <td></td>
                     <td><p id="hctot"></p></td>
                     <td><p id="prottot"></p></td>
                     <td><p id="liptot"></p></td>
                     <td><p id="kctot"></p></td>
                 </tr>
                 </tbody>
             </table>
             </div>
         </div>
    </div>
                        <div class="seven wide column">
                            <div class="two column row">
                            <div class="column">
                                <div class="ui segment">
                                <h3>Totales</h3>
                                    <table class="ui small celled definition table">
                                       <thead>
                                         <tr>
                                            <th></th>
                                             <th>%</th>
                                             <th>GRS</th>
                                             <th>KCALS</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td>H. de C.</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr>
                                         <tr>
                                             <td>Proteina</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr> 
                                         <tr>
                                             <td>Lipidos</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr> 
                                     
                                         </tbody>
                                  </table>
                                    </div>
                                </div>
                                <div class="column">
                                    <div id="graficapastel2" class="ui segment"> </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                  </div>
              </div>
<!-- temrina comida -->

<!-- inicia cena -->
<h4 class="ui horizontal divider header">-----</h4>
              <div class="ui three column stackable divided grid">
                  <div class="stretched row">
                  <div class="nine wide column">
                        <div class="column">
                            <div class="ui segment">
                                <h3><i class="coffee icon"></i>Cena</h3>
             <table class="ui small celled definition table">
                 <thead>
                 <tr>
                     <th></th>
                     <th>RAC</th>
                     <th>H.C</th>
                     <th>Prot</th>
                     <th>Lip</th>
                     <th>Kcals</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Leche</td>
                     <td><input type="text" id="rcleche3"></td>
                     <td><p id="hcleche3"></p></td>
                     <td><p id="proleche3"></p></td>
                     <td><p id="lileche3"></p></td>
                     <td><p id="kcleche3"></p></td>
                 </tr>
                 <tr>
                     <td>Carne</td>
                     <td><input type="text" id="rccarne3"></td>
                     <td><p id="hccarne3"></p></td>
                     <td><p id="procarne3"></p></td>
                     <td><p id="licarne3"></p></td>
                     <td><p id="kccarne3"></p></td>
                 </tr> 
                 <tr>
                     <td>Fruta</td>
                     <td><input type="text" id="rcfruta3"></td>
                     <td><p id="hcfruta3"></p></td>
                     <td><p id="profruta3"></p></td>
                     <td><p id="lifruta3"></p></td>
                     <td><p id="kcfruta3"></p></td>
                 </tr> 
                 <tr>
                     <td>Vegetales</td>
                     <td><input type="text" id="rcvegetales3"></td>
                     <td><p id="hcvegetales3"></p></td>
                     <td><p id="provegetales3"></p></td>
                     <td><p id="livegetales3"></p></td>
                     <td><p id="kcvegetales3"></p></td>
                 </tr>
                 <tr>
                     <td>Cer. y tub.</td>
                     <td><input type="text" id="rccereal3"></td>
                     <td><p id="hccereal3"></p></td>
                     <td><p id="procereal3"></p></td>
                     <td><p id="licereal3"></p></td>
                     <td><p id="kccereal3"></p></td>
                 </tr>
                 <tr>
                     <td>Leguminosas</td>
                     <td><input type="text" id="rcleguminosas3"></td>
                     <td><p id="hcleguminosas3"></p></td>
                     <td><p id="proleguminosas3"></p></td>
                     <td><p id="lileguminosas3"></p></td>
                     <td><p id="kcleguminosas3"></p></td>
                 </tr>
                 <tr>
                     <td>Grasas</td>
                     <td><input type="text" id="rcgrasas3"></td>
                     <td><p id="hcgrasas3"></p></td>
                     <td><p id="prograsas3"></p></td>
                     <td><p id="ligrasas3"></p></td>
                     <td><p id="kcgrasas3"></p></td>
                 </tr>
                 <tr>
                     <td>Azucar</td>
                     <td><input type="text" id="rcazucar3"></td>
                     <td><p id="hcazucar3"></p></td>
                     <td><p id="proazucar3"></p></td>
                     <td><p id="liazucar3"></p></td>
                     <td><p id="kcazucar3"></p></td>
                 </tr>
                 <tr>
                     <td>Total</td>
                     <td></td>
                     <td><p id="hctot"></p></td>
                     <td><p id="prottot"></p></td>
                     <td><p id="liptot"></p></td>
                     <td><p id="kctot"></p></td>
                 </tr>
                 </tbody>
             </table>
             </div>
         </div>
    </div>
                        <div class="seven wide column">
                            <div class="two column row">
                            <div class="column">
                                <div class="ui segment">
                                <h3>Totales</h3>
                                    <table class="ui small celled definition table">
                                       <thead>
                                         <tr>
                                            <th></th>
                                             <th>%</th>
                                             <th>GRS</th>
                                             <th>KCALS</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td>H. de C.</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr>
                                         <tr>
                                             <td>Proteina</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr> 
                                         <tr>
                                             <td>Lipidos</td>
                                             <td>?</td>
                                             <td>?</td>
                                             <td>?</td>
                                         </tr> 
                                     
                                         </tbody>
                                  </table>
                                    </div>
                                </div>
                                <div class="column">
                                    <div id="graficapastel3" class="ui segment"> </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                  </div>
              </div>

        </div>



<!-- tabla de ingesta diaria -->
<div class="ui stacked segment">
<h2 class="ui dividing center aligned header">
                 Ingesta Diaria
             </h2>
              <div class="ui one column stackable divided grid">
                  <div class="stretched row">
                  <div class="sixteen wide column">
                        <div class="column">
                            <div class="ui segment">
             <table class="ui small celled definition table">
                 <thead>
                 <tr>
                     <th></th>
                     <th>RAC</th>
                     <th>H.C</th>
                     <th>Prot</th>
                     <th>Lip</th>
                     <th>Kcals</th>
                     <th>Desayuno</th>
                     <th>Col. Mat.</th>
                     <th>Comida</th>
                     <th>Col. Vesp.</th>
                     <th>Cena</th>
                     <th>Mensaje</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Leche</td>
                     <td><input type="text" id="rcleche"></td>
                     <td><p id="hcleche"></p></td>
                     <td><p id="proleche"></p></td>
                     <td><p id="lileche"></p></td>
                     <td><p id="kcleche"></p></td>
                     <td><p id="deleche"></p></td>
                     <td><p id="cmleche"></p></td>
                     <td><p id="coleche"></p></td>
                     <td><p id="cvleche"></p></td>
                     <td><p id="celeche"></p></td>
                     <td><p id="mensajeleche"></p></td>
                 </tr>
                 <tr>
                     <td>Carne</td>
                     <td><input type="text" id="rccarne"></td>
                     <td><p id="hccarne"></p></td>
                     <td><p id="procarne"></p></td>
                     <td><p id="licarne"></p></td>
                     <td><p id="kccarne"></p></td>
                     <td><p id="decarne"></p></td>
                     <td><p id="cmcarne"></p></td>
                     <td><p id="cocarne"></p></td>
                     <td><p id="cvcarne"></p></td>
                     <td><p id="cecarne"></p></td>
                     <td><p id="mensajecarne"></p></td>
                 </tr> 
                 <tr>
                     <td>Fruta</td>
                     <td><input type="text" id="rcfruta"></td>
                     <td><p id="hcfruta"></p></td>
                     <td><p id="profruta"></p></td>
                     <td><p id="lifruta"></p></td>
                     <td><p id="kcfruta"></p></td>
                     <td><p id="defruta"></p></td>
                     <td><p id="cmfruta"></p></td>
                     <td><p id="cofruta"></p></td>
                     <td><p id="cvfruta"></p></td>
                     <td><p id="cefruta"></p></td>
                     <td><p id="mensajefruta"></p></td>
                 </tr> 
                 <tr>
                     <td>Vegetales</td>
                     <td><input type="text" id="rcvegetales"></td>
                     <td><p id="hcvegetales"></p></td>
                     <td><p id="provegetales"></p></td>
                     <td><p id="livegetales"></p></td>
                     <td><p id="kcvegetales"></p></td>
                     <td><p id="devegetales"></p></td>
                     <td><p id="cmvegetales"></p></td>
                     <td><p id="covegetales"></p></td>
                     <td><p id="cvvegetales"></p></td>
                     <td><p id="cevegetales"></p></td>
                     <td><p id="mensajevegetales"></p></td>
                 </tr>
                 <tr>
                     <td>Cer. y tub.</td>
                     <td><input type="text" id="rccereal"></td>
                     <td><p id="hccereal"></p></td>
                     <td><p id="procereal"></p></td>
                     <td><p id="licereal"></p></td>
                     <td><p id="kccereal"></p></td>
                     <td><p id="decereal"></p></td>
                     <td><p id="cmcereal"></p></td>
                     <td><p id="cocereal"></p></td>
                     <td><p id="cvcereal"></p></td>
                     <td><p id="cecereal"></p></td>
                     <td><p id="mensajecereal"></p></td>
                 </tr>
                 <tr>
                     <td>Leguminosas</td>
                     <td><input type="text" id="rcleguminosas"></td>
                     <td><p id="hcleguminosas"></p></td>
                     <td><p id="proleguminosas"></p></td>
                     <td><p id="lileguminosas"></p></td>
                     <td><p id="kcleguminosas"></p></td>
                     <td><p id="deleguminosas"></p></td>
                     <td><p id="cmleguminosas"></p></td>
                     <td><p id="coleguminosas"></p></td>
                     <td><p id="cvleguminosas"></p></td>
                     <td><p id="celeguminosas"></p></td>
                     <td><p id="mensajeleguminosas"></p></td>
                 </tr>
                 <tr>
                     <td>Grasas</td>
                     <td><input type="text" id="rcgrasas"></td>
                     <td><p id="hcgrasas"></p></td>
                     <td><p id="prograsas"></p></td>
                     <td><p id="ligrasas"></p></td>
                     <td><p id="kcgrasas"></p></td>
                     <td><p id="degrasas"></p></td>
                     <td><p id="cmgrasas"></p></td>
                     <td><p id="cograsas"></p></td>
                     <td><p id="cvgrasas"></p></td>
                     <td><p id="cegrasas"></p></td>
                     <td><p id="mensajegrasas"></p></td>
                 </tr>
                 <tr>
                     <td>Azucar</td>
                     <td><input type="text" id="rcazucar"></td>
                     <td><p id="hcazucar"></p></td>
                     <td><p id="proazucar"></p></td>
                     <td><p id="liazucar"></p></td>
                     <td><p id="kcazucar"></p></td>
                     <td><p id="deazucar"></p></td>
                     <td><p id="cmazucar"></p></td>
                     <td><p id="coazucar"></p></td>
                     <td><p id="cvazucar"></p></td>
                     <td><p id="ceazucar"></p></td>
                     <td><p id="mensajeazucar"></p></td>
                 </tr>
                 <tr>
                     <td>Total</td>
                     <td></td>
                     <td><p id="hctot"></p></td>
                     <td><p id="prottot"></p></td>
                     <td><p id="liptot"></p></td>
                     <td><p id="kctot"></p></td>
                     <td><p id="decarne"></p></td>
                     <td><p id="cmcarne"></p></td>
                     <td><p id="cocarne"></p></td>
                     <td><p id="cvcarne"></p></td>
                     <td><p id="cecarne"></p></td>
                     <td><p id="mensajecarne"></p></td>
                 </tr>
                 </tbody>
             </table>
             </div>
         </div>
    </div>
</div>







         <input type="submit" class="ui fluid large teal submit button" value="Guardar">

        </form>
        @if (count($errors) > 0)
                <!-- Form Error List -->
            <div class="ui error message">
                <i class="close icon"></i>
                    <div class="header">
                        Ha ocurrido un error
                    </div>
                    <ul class="list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
        @endif

@endsection
