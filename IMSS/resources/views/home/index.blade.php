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


// js de acordeon

$(document).ready(function(){ 
    $('.ui.accordion').accordion(); 
}); 
// fin js del acordeon 

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
                     <div class="field">
                        <label>Edad</label>
                        <input type="text" id="edad" ></input>
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
                            <div>
                            <input type="button" id="btn_genera" value="Ver gráfico" />
                                 <br/>
                             <div id="container_highchart"></div>
                          </div>
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

       <!-- antecedentes clinico  -->  
  


         <div class="ui stacked segment">
         <div class="ui accordion">
            <div class="active title"> <h2 class="ui dividing center aligned header"><i class="dropdown icon"></i>
                 Antecedentes Clinicos
             </h2> </div>
             <div class="active content">
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
         </div>
    </div>
         <br>


  
         <div class="ui stacked segment" id="analisis">
          <div class="ui accordion">
             <div class="active title"> <h2 class="ui center aligned dividing header"><i class="dropdown icon"></i> Analisis de Laboratorio</h2></div>
              <div class="active content">
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
    </div>
    </div>

 <!--Inicia Recordatorio de 24 hrs inicia dieta desayuno comida cena  -->


   

<div class="ui stacked segment">
<div class="ui accordion">
<div class="active title">
<h2 class="ui dividing center aligned header"><i class="dropdown icon"></i>
                 Comidas
             </h2></div>
             <div class="active content">
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
        </div>
        </div>




<!-- tabla de ingesta diaria -->
<div class="ui stacked segment">
<div class="ui accordion">
<div class="active title">
<h2 class="ui dividing center aligned header">
               <i class="dropdown icon"></i>   
             </h2></div>
             <div class="active content">
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
    </div>
</div>
</div>



  <div class="ui stacked segment" id="analisis">
          <div class="ui accordion">
             <div class="active title"> <h2 class="ui center aligned dividing header"><i class="dropdown icon"></i> Gasto Energetico</h2></div>
              <div class="active content">

               <div class="field">
                        <label for="">F.A.</label>
                        <select name="gastoEnergetico" id="gastoEnergetico" class="two wide field">
                            <option value="1.2">1.20 ENCAMADO Y CIRUGIA MENOR</option>
                            <option value="1.3">1.30 AMBULATORIOS</option>
                            <option value="1.35">1.35 TRAUMATISMO DE ESQUELETO</option>
                            <option value="1.6">1.60  INFECCION GENERALIZADA</option>
                            <option value="2.1">2.10 QUEMADURAS</option>
                        </select>
                    </div>

             <h3>OMS</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>GEB</td>
                         <td><input type="text" id="geb1"></td>
                     </tr>
                     <tr>
                         <td>F.A.</td>
                         <td><p id="fa" class="fa" >elige la opción F.A.</p></td>
                     </tr>
                     <tr>
                         <td>GET</td>
                         <td><input type="text" id="get1"></td>
                     </tr>
                 </tbody>
             </table>
             <h3>H.B.</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>GEB</td>
                         <td><input type="text" id="geb2"></td>
                     </tr>
                     <tr>
                         <td>F.A.</td>
                         <td><p id="fa" class="fa" >elige la opción F.A. </p></td>
                     </tr>
                     <tr>
                         <td>GET</td>
                         <td><input type="text" id="get2"></td>
                     </tr>
                 </tbody>
             </table>
             <h3>Owen</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>GEB</td>
                         <td><input type="text" id="geb3"></td>
                     </tr>
                     <tr>
                         <td>F.A.</td>
                         <td><p id="fa" class="fa" >elige la opción F.A.</p></td>
                     </tr>
                     <tr>
                         <td>GET</td>
                         <td><input type="text" id="get3"></td>
                     </tr>
                 </tbody>
             </table>
         </div>
    </div>
    </div>



<!-- comienza formato -->
  <div class="ui container">
        <h1 class="ui dividing header">
            <i class="doctor icon"></i> Formato para impresion
        </h1>
        <div class="ui attached message">
            <div class="header">
                Instituto Mexicano Del Seguro Social <br>
                Departamento de Nutrición Y Dietetica HGR 36 <br>
            </div>
            <p></p>
        </div>
        <form action="{{url('/historial/guardar')}}" class="ui form" method="post">
            <div class="ui stacked segment">
            {!! csrf_field() !!}
                <div class="fields">
                    <div class="field">
                        <label>Nombre</label>
                        <p>Adan</p> <p>Uri</p> <p>Plata</p>
                    </div>
                    <div class="field">
                        <label for="">NSS</label>
                        <p></p>
                    </div>

                    <div class="field">
                        <label for="">Fecha</label>
                        <p></p>
                    </div>
                    <div class="field">
                        <label for="">Edad</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">Sexo</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">Peso Actual</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">Estatura</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">Peso ideal</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">IMC</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">ICC</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">Diagnostico</label>
                        <p></p>
                    </div><div class="field">
                        <label for="">Tx Dietetico</label>
                        <p></p>
                    </div>
                </div>

<div class="ui stacked segment">
<div class="active title">
<h2 class="ui dividing center aligned header">  
             </h2></div>
             <div class="active content">
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
                     <th>Desayuno</th>
                     <th>Col. Mat.</th>
                     <th>Comida</th>
                     <th>Col. Vesp.</th>
                     <th>Cena</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Leche</td>
                     <td><p id="rcleche"></p></td>
                     <td><p id="deleche"></p></td>
                     <td><p id="cmleche"></p></td>
                     <td><p id="coleche"></p></td>
                     <td><p id="cvleche"></p></td>
                     <td><p id="celeche"></p></td>                 
                </tr>
                 <tr>
                     <td>Carne</td>
                     <td><p id="rccarne"></p></td>
                     <td><p id="decarne"></p></td>
                     <td><p id="cmcarne"></p></td>
                     <td><p id="cocarne"></p></td>
                     <td><p id="cvcarne"></p></td>
                     <td><p id="cecarne"></p></td>                 
                </tr> 
                 <tr>
                     <td>Fruta</td>
                     <td><p id="rcfruta"></p></td>
                     <td><p id="defruta"></p></td>
                     <td><p id="cmfruta"></p></td>
                     <td><p id="cofruta"></p></td>
                     <td><p id="cvfruta"></p></td>
                     <td><p id="cefruta"></p></td>                 
                </tr> 
                 <tr>
                     <td>Vegetales</td>
                     <td><p id="rcvegetales"></p></td>
                     <td><p id="devegetales"></p></td>
                     <td><p id="cmvegetales"></p></td>
                     <td><p id="covegetales"></p></td>
                     <td><p id="cvvegetales"></p></td>
                     <td><p id="cevegetales"></p></td>
                 </tr>
                 <tr>
                     <td>Cer. y tub.</td>
                     <td><p id="rcceral"></p></td>
                     <td><p id="decereal"></p></td>
                     <td><p id="cmcereal"></p></td>
                     <td><p id="cocereal"></p></td>
                     <td><p id="cvcereal"></p></td>
                     <td><p id="cecereal"></p></td>
                 </tr>
                 <tr>
                     <td>Leguminosas</td>
                     <td><p id="rcleguminosas"></p></td>
                     <td><p id="deleguminosas"></p></td>
                     <td><p id="cmleguminosas"></p></td>
                     <td><p id="coleguminosas"></p></td>
                     <td><p id="cvleguminosas"></p></td>
                     <td><p id="celeguminosas"></p></td>
                 </tr>
                 <tr>
                     <td>Grasas</td>
                     <td><p id="rcgrasa"></p></td>
                     <td><p id="degrasas"></p></td>
                     <td><p id="cmgrasas"></p></td>
                     <td><p id="cograsas"></p></td>
                     <td><p id="cvgrasas"></p></td>
                     <td><p id="cegrasas"></p></td>
                 </tr>
                 <tr>
                     <td>Azucar</td>
                     <td><p id="rcazucar"></p></td>
                     <td><p id="deazucar"></p></td>
                     <td><p id="cmazucar"></p></td>
                     <td><p id="coazucar"></p></td>
                     <td><p id="cvazucar"></p></td>
                     <td><p id="ceazucar"></p></td>
                 </tr>
                 </tbody>
             </table>
                 </div>
             </div>
        </div>
    </div>
    </div>
</div>

 <h3>Grupo de Leche</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>Leche descremada o light</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>Yogurt natural o light</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Queso: Hebra, panela, requesón</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>

<h3>Grupo de Carnes</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>Clara de huevo</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>Atun en agua</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Pollo sin piel</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Pescado fresco</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Res magra</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Queso panela</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Queso cottage</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>

<h3>Grupo de Carnes</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>acelgas</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>col</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Chayote</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Chile Poblano</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>espinaca cocida</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>espinaca cruda</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>jitomate </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>pimiento</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>zanahoria</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>calabacita cruda</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>calabaza cocida</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>betabel </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>chicharo</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>hongos </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>haba verde</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>lechuga </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>apio</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>berro</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>berenjena</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>huazontle</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>

<h3>Grupo de Frutas</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>Capulines</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>Ciruela</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Chabacanos</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Chicozapote </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Durazno</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Fresas</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Guayaba </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Higo fresco</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Jícama</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Kiwi</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td></td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>betabel </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Sandía</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>toronja</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>haba verde</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>lechuga </td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>apio</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>berro</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>berenjena</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>huazontle</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>
             <h3>Grupo de Cereales</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>Bolillo</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>Pan tostado integral</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Tortilla de maíz</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Arroz con verduras</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Sopa de pasta</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Avena cocida</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Cereal integral</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                     <tr>
                         <td>Amaranto</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                     <tr>
                         <td>Pan integral</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>

             <h3>Grupo de Leguminosas</h3>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>Frijol</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>Haba</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Lenteja</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Garbanzos</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Alberjones</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Soya</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Soya  hidratada</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                     <tr>
                         <td>soya germinada</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                     <tr>
                         <td>Pan integral</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>
      <h3>Grupo de Grasas</h3>
      <h4>Por cada ración de grasa puede consumir  5 gramos o una cucharadita cafetera de: <p> Aceite de maíz, girasol, algodón, cártamo, soya, margarina.</p></h4>
             <table class="ui small celled definition table" >
                 <thead>
                     <tr>
                         <th></th>
                         <th></th>
                     </tr>
                 </thead>
                  <tbody>
                     <tr>
                         <td>Aguacate</td>
                         <td><input type="text" >taza</td>
                     </tr>
                     <tr>
                         <td>Nueces</td>
                         <td><p id="fa" class="fa" ></p>taza</td>
                     </tr>
                     <tr>
                         <td>Avellanas</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr><tr>
                         <td>Almendras</td>
                         <td><input type="text" id="get2">gr</td>
                     </tr>
                 </tbody>
             </table>

        <h3>Recomendaciones</h3>
            <ul>
            <li>*Respete las cantidades de alimentación que se indique en su dieta.</li>
            <li>*Tome mínimo 1.5 litros de agua al día.</li>
            <li>*Coma la fruta y la verdura preferentemente cocida.
            </li>
            <li>*No comer más cantidades de frutas de las indicadas.</li>
            <li>*Si nunca ha realizado ejercicio inicie con 10 minutos de caminata en superficies planas , con calzado comodo y ropa adecuada y aumente progresivamente el tiempo de ejercicio paulatinamente.</li>
            <li>*ANTES DE REALIZAR CUALQUIER ACTIVIDAD FISICA O EJERCICIO CONSULTE A SU MEDICO.</li>
            <li>*Asar, hervir, al vapor o al horno sus alimentos y evitar freír, capear o empanizar.</li>
            </ul>

            </div>

<!-- temrina formato -->

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
