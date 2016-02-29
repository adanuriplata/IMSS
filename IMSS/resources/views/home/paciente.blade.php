@extends('layout-home')
<style>
    #datos-paciente>p{
        margin-left: 50px;
        font-size: 1.25em;
    }


</style>
@section('scripts')
    <script>

        $(document).ready(function() {
            $("#pesoAc").keyup(function () {
                var peso = $("#pesoAc").val();
                var estatura = $("#estatura").keyup().val();
                var pesoTeorico = 21.5 * Math.pow(estatura, 2);

                $("#porPesoT").html((peso / pesoTeorico) * 100);

                var pesoHab = $("#pesoHab").keyup().val();
                $("#porPesoHab").html((peso / pesoHab) * 100);

                $("#ppci").html((peso / pesoTeorico) * 100);
            });

            $("#estatura").keyup(function () {
                var estatura = $("#estatura").val();
                $("#PesoTeorico").html(21.5 * Math.pow(estatura, 2));
                $("#RangoInferior").html(18.5 * Math.pow(estatura, 2));
                $("#RangoSuperior").html(24.9 * Math.pow(estatura, 2));
                $("#pesoAc").keyup(function () {
                    var pesoAc = $("#pesoAc").val();
                    $("#imc").html(pesoAc / Math.pow(estatura, 2));
                });
            });
            $("#cintura").keyup(function () {
                var cintura = $("#cintura").val();
                $("#cadera").keyup(function () {
                    var cadera = $("#cadera").val();
                    $("#icc").html(cintura / cadera);
                });
            });
            $('.checkbox').checkbox();

            $('.message .close')
                    .on('click', function () {
                        $(this)
                                .closest('.message')
                                .transition('fade')
                        ;
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
                        data: [60, 75]
                    }]
                });
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
                INSTITUTO MEXICANO DEL SEGURO SOCIAL <br>
                HOSPITAL GENERAL REGIONAL 36 <br>
                DEPARTAMENTO DE NUTRICION Y DIETETICA <br>
            </div>
        </div>
        <div class="ui stacked segment">

            @foreach($paciente as $p)
                <div class="ui container" id="datos-paciente">
                    <h2 class="ui dividing header">
                        <i class="settings icon"></i>
                        <div class="content">
                            Datos del paciente:
                            <div class="sub header">
                                Numero de consultas: ?
                            </div>
                        </div>
                    </h2>
                    <p><i class="user icon"></i><strong>Nombre completo:</strong>{{ucfirst($p->nombre)." ".ucfirst($p->paterno)." ".ucfirst($p->materno)}}</p>
                    <p><i class="angle right icon"></i><strong>NSS:</strong> {{$p->nss}}</p>
                    <p><i class="birthday icon"></i><strong>Fecha nacimiento:</strong> {{$p->fecha_nacimiento}}</p>
                    <p><i class="heterosexual icon"></i><strong>Sexo:</strong> @if($p->sexo == 1)Masculino <i class="male icon"></i> @else Femenino <i class="female icon"></i> @endif</p>
                    <p><i class="student icon"></i><strong>Escolaridad: </strong>{{ucfirst($p->escolaridad) }}</p>
                    <p><i class="suitcase icon"></i><strong>Ocupacion:</strong> {{ucfirst($p->ocupacion)}}</p>
                    <p><i class="users icon"></i><strong>Familia:</strong> N° Niños:{{$p->num_familia_adultos}} &nbsp; &nbsp;N° Adultos:{{$p->num_familia_ninios}}</p>
                    <hr>

                </div>
            @endforeach
            <h3 class="ui dividing header">Nueva Consulta </h3>
            <form action="{{url('/paciente/guardar/consulta')}}" class="ui form" method="post">

                    {!! csrf_field() !!}
                    @foreach($paciente as $p)
                        <input type="hidden" name="id" value="{{$p->id}}">
                    @endforeach

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

                    <div class="ui segment">
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
        </div>
    </div>
@endsection