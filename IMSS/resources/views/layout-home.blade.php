<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('semantic.css')}}">
    <script src="{{asset('jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('semantic.js')}}"></script>

 <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

    @yield('scripts')
    <style>
        #menu{
            margin-left: 10px;
        }

    </style>
</head>
<body>

    <div class="ui stackable menu">
        <div class="item">
            <img src="{{url('logo-imss.png')}}">
        </div>
        <a class="item active">Nombre</a>
        <a class="item">Perfil</a>
        <a class="item">Logout</a>
    </div>

    <div class="ui grid">
        <div class="three wide column">
            <div class="ui container" >
                <div class="ui vertical menu" id="menu">
                    <div class="item">
                        <div class="header">Consultas</div>
                        <div class="menu">
                            <a class="item" href="{{url('/')}}">Buscar Paciente</a>
                            
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