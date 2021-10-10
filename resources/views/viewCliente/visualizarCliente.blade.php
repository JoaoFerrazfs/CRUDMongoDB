@extends('layouts.layoutBase')

@section('title','Cadastro de Cliente')

@section('content')



<div class="container" name="editar">
    <form action="/atualizarcliente/{{$cliente->_id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">

            <div class="mb-3 input-group">
                <label for="nome" class="form-label input-group ">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}">
            </div>

            <div class="mb-3 input-group">
                <label for="telefone" class="form-label input-group ">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{$cliente->telefone}}">
            </div>

            <div class="mb-3 input-group ">
                <label for="email" class="form-label input-group ">Email</label>
                <input type="email" class="form-control input-group " id="email" name="email" value="{{$cliente->email}}">
            </div>
        </div>

        <div class="input-group">
            <button type="input" class="btn btn-primary">Atualizar Dados</button>
        </div>

    </form>

    <form action="/deletarcliente/{{$cliente->_id}}" method="POST" class="input-group">
        @csrf
        @method('DELETE')
        <div class="deletecliente ">
            <button type="submit" class="btn btn-danger" id="product-update">Deletar Cliente</button>
        </div>
    </form>

</div>

@endsection