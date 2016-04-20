<!doctype html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/semantic.css')}}">
    <script src="{{asset('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('js/semantic.js')}}"></script>


 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
 <script src="{{asset('js/calcularedad.js')}}"></script>
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="{{asset('js/grafico_historial_peso.js')}}"></script>
<script src="{{asset('js/grafico_dieta.js')}}"></script>
<script src="{{asset('js/gastoEnergetico.js')}}"></script>


<!-- <<<<<<< HEAD
=======
>>>>>>> e8d82fc507a0e2e7c7b3ef9e607a61e83f443e1b -->


    @yield('scripts')
    <style>
        #menu{
            margin-left: 10px;
        }

    </style>
</head>
<body ng-app>

    <div class="ui stackable menu">
        <div class="item">
            <img src="{{url('images/logo-imss.png')}}">
        </div>
        <a class="item active">Nombre</a>
        <a class="item">Perfil</a>
        <a class="item">Logout</a>
    </div>

    <div class="ui stackable grid">
        <div class="three wide column">
            <!--<div class="ui vertical inverted sidebar menu left"></div>-->
            <div class="ui container" >
                <div class="ui vertical menu" id="menu">
                    <div class="item">
                        <div class="header">Consultas</div>
                        <div class="menu">
                            <a class="item" href="{{url('/')}}">Buscar Paciente</a>
                            <a class="item" href="{{url('/nuevo-usuario')}}">Registrar paciente</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="header"></div>
                        <div class="menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="eleven wide column">
            @yield('contenido')
        </div>

    </div>





</body>
</html>