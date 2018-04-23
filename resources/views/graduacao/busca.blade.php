@extends('adminlte::page')

@section('title', env('APP_NAME') . ' - Buscar aluno')

@section('content_header')
    <h1>Buscar aluno</h1>
@stop

@section('content')
    
    @include('flash')

    <form method="post" action"/buscaReplicado">
        {{ csrf_field() }} 
        <input name="codpes" type="text" pattern="[0-9]*" placeholder="Nº USP" required>

        <button type="submit" class="btn btn-success">Buscar</button>
    </form>

    @if (isset($graduacaoCurso))

        <h3>{{ $graduacaoCurso['codpes'] }} - {{ $graduacaoCurso['nompes'] }}</h3>
        Curso: <strong>{{ $graduacaoCurso['codcur'] }} - {{ $graduacaoCurso['nomcur'] }}</strong><br />
        Habilitação: <strong>{{ $graduacaoCurso['codhab'] }} - {{ $graduacaoCurso['nomhab'] }}</strong><br />
        Ano de ingresso: <strong>{{ Carbon\Carbon::parse($graduacaoCurso['dtainivin'])->format('Y') }}</strong>

    @endif

@stop
