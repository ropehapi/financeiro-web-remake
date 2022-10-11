@extends('layout.index')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('content_header')
    <h1>Cadastrar carteiras</h1>
@stop

@section('content')
    @include("layout.messages")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 5%">Moeda</th>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th class="text-right">Quantia</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wallets as $wallet)
                                <tr>
                                    <td>{{$wallet->id}}</td>
                                    <td>{{$wallet->currency}}</td>
                                    <td>{{$wallet->type}}</td>
                                    <td>{{$wallet->name}}</td>
                                    <td class="text-right">{{$wallet->amount}}</td>
                                    <td>
                                        <button title="Editar" type="button" class="btn btn-xs btn-primary"><i class="fa-solid fa-pencil"></i></button>
                                        <button title="Excluir" type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#example1').DataTable();
        } );
    </script>
@stop
