@extends('layout-home')
<style>
    .form{
        width:600px;
        margin:auto;
    }
    label{
        font-size: 1.5em;
    }
</style>

@section('contenido')
    <div class="ui container">
        @if(isset($exito))
            <div class="ui success message">
                <i class="close icon"></i>
                <div class="header">
                    {{$exito}}
                </div>
                <p></p>
            </div>
        @endif
        <div class="ui stacked segment">
            <div class="ui center aligned container">
                <div class="ui form">
                    <div class="field">
                        <h2>Buscar paciente</h2>
                        <div class="ui big category search item">
                            <div class="ui fluid icon input">
                                <input type="hidden" name="" value="{{csrf_token()}}" id="token">
                                <input type="text" placeholder="Buscar..." name="nss" id="nss">
                                <i class="search link icon"></i>
                            </div>
                        </div>
                    </div>
                    <h3 id="fail" style="display: none;">El usuario no se encuentra registrado <a href="{{url('/nuevo-usuario')}}">Dar de Alta</a></h3>
                </div>
                <div id="listaPacientes" style="margin-top: 20px;">

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.message .close').on('click', function() {
                $(this).closest('.message').transition('fade');
            });
            $("#nss").keyup(function () {
                var nss=$("#nss").val();
                if(nss != ""){
                    mostrarDatos(nss);
                }else {
                    $("table").hide();
                }
            });
            $("body").on("click","#listaPacientes button",function(){

                nss=$(this).val();
                $.ajax({
                    url:"http://localhost:8000/paciente/nueva-consulta/",
                    type:"get",
                    data:{'nss':nss},
                    success:function(respuesta){
                        //alert(respuesta);
                        if(respuesta == "simon")
                        {
                            window.location.replace('/prueba/'+nss);

                        }


                    }
                });

            });
        });

        function mostrarDatos(nss)
        {
            var token=$("#token").val();
            $.ajax({
                url:"http://localhost:8000/paciente/buscar",
                headers:{'X-CSRF-TOKEN':token},
                type:"POST",
                data:{nss:nss},
                success: function (respuesta) {
                    //alert(respuesta);

                    if(respuesta == "fail"){
                        $("#fail").fadeIn();
                        $("table").hide();
                    }else{

                        $("#fail").hide();
                        var registros=eval(respuesta);
                        var sexo="";

                        var html="<table class='ui black celled table' ><thead><tr><th>N°</th><th>Nombre completo</th><th>Sexo</th><th>Fecha nacimiento</th><th>Ocupación</th><th>Nss</th><th>Acciones</th></tr></thead><tbody>";
                        for (i in registros){
                            if(registros[i].sexo==0){
                                sexo="masculino"
                            }else{
                                sexo="femenino"
                            }
                            html +="<tr ><td>"+i+"</td>" +
                                    "<td>"+registros[i].nombre+" "+registros[i].paterno+" "+registros[i].materno+"</td>" +
                                    "<td>"+sexo+"</td>"+
                                    "<td>"+registros[i].fecha_nacimiento+"</td>" +
                                    "<td>"+registros[i].ocupacion+"</td>"+
                                    "<td>"+ registros[i].nss+"</td>"+
                                    "<td><button class='ui primary button' value="+registros[i].nss+">Consulta</button></td>"+"</tr>";
                        }
                        html += "</tbody> </table>";
                        $("#listaPacientes").html(html);
                    }


                }
            });
        }
    </script>
@endsection