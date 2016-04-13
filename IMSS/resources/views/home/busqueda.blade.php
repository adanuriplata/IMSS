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
                <form action="{{url('/paciente/buscar/')}}" method="post" class="ui form">
                    {!! csrf_field() !!}
                    <div class="field">
                        <h2>Buscar paciente</h2>
                        <div class="ui big category search item">
                            <div class="ui fluid icon input">
                                <input type="text" placeholder="Buscar..." name="nss">
                                <i class="search link icon"></i>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Buscar" class="ui fluid teal button">
                    @if(isset($noexiste))
                        <h4>El usuario no se encuentra registrado <a href="{{url('/nuevo-usuario')}}">Dar de Alta</a></h4>
                    @endif
                </form>

            </div>
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
    <script>
        $('.message .close')
                .on('click', function() {
                    $(this)
                            .closest('.message')
                            .transition('fade')
                    ;
                })
        ;
    </script>
@endsection