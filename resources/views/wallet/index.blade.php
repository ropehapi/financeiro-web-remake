@extends('layout.index')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('content_header')
    <h1>Cadastrar carteiras</h1>
@stop

@section('content')
    @include("layout.messages")
    <p>Will show your wallets.</p>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
