@extends('layout-home')
@section('scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
        $("#genero").dropdown();
        $("#mienbros").dropdown();
    </script>
@endsection
@section('contenido')
    <div class="ui container">
        <h1 class="ui dividing header">
            <i class="doctor icon"></i> Nueva consulta
        </h1>
        <form action="" class="ui form" method="post">
            {!! csrf_field() !!}
                <div class="fields">
                    <div class="field">
                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre(s)">
                    </div>
                    <div class="field">
                        <label for="">Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Apellidos">
                    </div>
                    <div class="field">
                        <label for="">NSS</label>
                        <input type="text" name="nss">
                    </div>
                </div>
            <div class="three wide field">
                <label for="">Fecha de nacimiento</label>
                <input type="text" id="datepicker" class="">
            </div>
            <div class="field">
                <label>Sexo</label>
                <select class="three wide field" id="genero">
                    <option value="1">Masculino</option>
                    <option value="0">Femenino</option>
                </select>
            </div>
            <div class="field">
                <label for="">Peso Actual</label>
                <input type="text" class="two wide field">
            </div>
            <div class="field">
                <label for="">Peso Habitual</label>
                <input type="text" class="two wide field">
            </div>
            <div class="field">
               <h4>Peso teorico ideal: </h4>
            </div>
            <div class="field">
               <h4> Rango inferior: </h4>
            </div>
            <div class="field">
                <h4>Rango superior: </h4>
            </div>
            <div class="field">
               <h4>% De peso teorico: </h4>
            </div>
            <div class="field">
               <h4>% De peso habitual: </h4>
            </div>
            <div class="field">
                <label for="">Estatura</label>
                <input type="text" class="three wide field">
            </div>
            <div class="field">
                <h4>IMC: </h4>
            </div>
            <div class="field">
                <h4>P.P.C.I : </h4>
            </div>
            <div class="field">
                <h4>Clasificación: </h4>
            </div>
            <div class="field">
                <label for="">Cintura</label>
                <input type="text" class="three wide field">
            </div>
            <div class="field">
                <label for="">Cadera</label>
                <input type="text" class="three wide field">
            </div>
            <div class="field">
                <h4>I.C.C : </h4>
            </div>
            <div class="field">
                <label for="">Perimetro Abdominal</label>
                <input type="text" class="three wide field">
            </div>
            <div class="field">
                <label for="">Circunferencia Muñeca</label>
                <input type="text" class="three wide field">
            </div>
            <div class="field">
                <label for="">Miembros amputados</label>
                <select class="three wide field" id="miembros">
                    <option value="0.7">Mano</option>
                    <option value="2.3">Antebrazo y Mano</option>
                    <option value="5">Miembro Superior</option>
                    <option value="1.5">Pie</option>
                    <option value="5.9">Pie y Pierna</option>
                </select>
            </div>
            <div class="field">
                <h4>Peso corregido</h4>
            </div>

        </form>
    </div>
@endsection