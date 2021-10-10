@extends('layouts.layoutBase')

@section('title','Cadastro de Cliente')

@section('content')


<form action="/cadastroCliente" method="POST">
    @csrf
    <div class="container">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>

    <div class="container">
        <button type="input" class="btn btn-primary">Salvar Dados</button>
    </div>

</form>

@endsection