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


//jquery grafico
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
