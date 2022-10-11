@extends('layout.index')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('content_header')
    <h1>Carteiras</h1>
@stop

@section('content')
    @include("layout.messages")
    <div class="row">
        <div class="col-md-12">
            <div class="card card-purple">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar carteira</h3>
                </div>
                <form method="POST" action="{{ route('storeWallet') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nome</label>
                                <input name="name" type="text" class="form-control" placeholder="Nome da carteira">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Moeda</label>
                                <input name="currency" type="text" class="form-control" placeholder="Moeda da carteira">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Saldo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </div>
                                    <input name="amount" id="amount" type="number" class="form-control" step="0.01" min="0.01">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select name="type" class="form-control">
                                        <option>Débito</option>
                                        <option>Crédito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success float-right">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function(){});
    </script>
@stop
