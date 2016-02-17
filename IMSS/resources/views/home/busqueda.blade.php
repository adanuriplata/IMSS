@extends('layout-home')
<style>
    .stacked{
        width:400px;
    }
</style>

@section('contenido')
    <div class="ui container">
        <div class="ui stacked segment">
            <form action="{{url('/paciente/buscar/')}}" method="post" class="ui form">
                {!! csrf_field() !!}
                <div class="field">
                    <label for="">Buscar paciente</label>
                    <div class="ui category search item">
                        <div class="ui fluid icon input">
                            <input type="text" placeholder="Buscar..." name="nss">
                            <i class="search link icon"></i>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Buscar" class="ui fluid teal button">
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
            @if(isset($noexiste))
                <p>El usuario no se encuentra registrado <a href="{{url('/nuevo-usuario')}}">Dar de Alta</a></p>
            @endif
        </div>
    </div>
@endsection