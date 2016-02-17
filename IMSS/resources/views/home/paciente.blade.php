@extends('layout-home')
<style>
    #datos-paciente{
        margin-left: 20px;
    }

</style>
@section('scripts')
    <script>

        $(document).ready(function(){
            $("#pesoAc").keyup(function(){
                var peso=$("#pesoAc").val();
                var estatura=$("#estatura").keyup().val();
                var pesoTeorico=21.5*Math.pow(estatura,2);

                $("#porPesoT").html((peso/pesoTeorico)*100);

                var pesoHab=$("#pesoHab").keyup().val();
                $("#porPesoHab").html((peso/pesoHab)*100);

                $("#ppci").html((peso/pesoTeorico)*100);
            });

            $("#estatura").keyup(function(){
                var estatura=$("#estatura").val();
                $("#PesoTeorico").html(21.5*Math.pow(estatura,2));
                $("#RangoInferior").html(18.5*Math.pow(estatura,2));
                $("#RangoSuperior").html(24.9*Math.pow(estatura,2));
                $("#pesoAc").keyup(function(){
                    var pesoAc=$("#pesoAc").val();
                    $("#imc").html(pesoAc/Math.pow(estatura,2));
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
            <h3 class="ui dividing header">Datos del paciente: </h3>
            @foreach($paciente as $p)
                <div class="ui container" id="datos-paciente">
                    <input type="hidden" name="id" value="{{$p->id}}">
                    <p><strong>Nombre completo:</strong>{{$p->nombre." ".$p->paterno." ".$p->materno}}</p>
                    <p><strong>NSS:</strong> {{$p->nss}}</p>
                    <p><strong>Fecha nacimiento:</strong> {{$p->fecha_nacimiento}}</p>
                    <p><strong>Sexo:</strong> @if($p->sexo == 1)Masculino @else Femenino @endif</p>
                    <p><strong>Escolaridad: </strong>{{$p->escolaridad}}</p>
                    <p><strong>Ocupacion:</strong> {{$p->ocupacion}}</p>
                    <p><strong>Familia:</strong> N°niños:{{$p->num_familia_adultos}} Adultos:{{$p->num_familia_ninios}}</p>
                    <hr>
                </div>
            @endforeach
            <h3 class="ui dividing header">Nueva Consulta </h3>
            <form action="{{url('/paciente/guardar/consulta')}}" class="ui form" method="post">
                <div class="ui stacked segment">
                    {!! csrf_field() !!}
                    <div class="field">
                        <label for="">Peso Actual</label>
                        <input type="text" class="two wide field" id="pesoAc" name="PesoActual">
                    </div>
                    <div class="field">
                        <label for="">Peso Habitual</label>
                        <input type="text" class="two wide field" id="pesoHab" name="PesoHabitual">
                    </div>
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
                        <label for="">Estatura</label>
                        <input type="text" class="three wide field" name="Estatura" id="estatura">
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
                        <label for="">Cintura</label>
                        <input type="text" class="three wide field" name="Cintura" id="cintura">
                    </div>
                    <div class="field">
                        <label for="">Cadera</label>
                        <input type="text" class="three wide field" name="Cadera" id="cadera">
                    </div>
                    <div class="field">
                        <h4>I.C.C : <p id="icc"></p> </h4>
                    </div>
                    <div class="field">
                        <label for="">Perimetro Abdominal</label>
                        <input type="text" class="three wide field" name="PerimetroAbdominal">
                    </div>
                    <div class="field">
                        <label for="">Circunferencia Muñeca</label>
                        <input type="text" class="three wide field" name="CircunferenciaMuneca">
                    </div>
                    <div class="inline field">
                        <label for="">Ejercicio</label>
                        <select name="ejercicio" id="">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <h3>Antecedentes: </h3>
                    <div class="ui equal width stretched grid">
                        <div class="column">
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Bajo Peso</label>
                                    <input type="checkbox" name="" id="bajoPeso">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Sobrepeso</label>
                                    <input type="checkbox" name="sobrepeso" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Desnutrición</label>
                                    <input type="checkbox" name="desnutricion" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Obesidad</label>
                                    <input type="checkbox" name="obesidad" id="">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Hipertension</label>
                                    <input type="checkbox" name="hipertension" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Diabetes</label>
                                    <input type="checkbox" name="diabetes" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Cardiopatia(s)</label>
                                    <input type="checkbox" name="cardiopatia" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Neuropatia(s)</label>
                                    <input type="checkbox" name="neuropatia" id="">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Cancer</label>
                                    <input type="checkbox" name="cancer" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Gastritis</label>
                                    <input type="checkbox" name="gastritis" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Colitis</label>
                                    <input type="checkbox" name="colitis" id="">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Alcoholismo</label>
                                    <input type="checkbox" name="alcoholismo" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Tabaquismo</label>
                                    <input type="checkbox" name="tabaquismo" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Alergias</label>
                                    <input type="checkbox" name="alergias" id="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <label for="">Medicamentos</label>
                                    <input type="checkbox" name="medicamentos" id="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <input type="submit" class="ui fluid large teal submit button" value="Guardar">

                </div>

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