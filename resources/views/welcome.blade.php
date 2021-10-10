@extends('layouts.layoutBase')

@section('title','Cadastro de Cliente')

@section('content')


<div class="container-fluid" name="informacao">
<table class="table">
  <thead>
    <tr>      
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      
      <tr>
      @foreach ($cliente as $cliente )
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->telefone}}</td>
      <td>{{$cliente->email}}</td>
      <td><a href="/visualizarcliente/{{$cliente->_id}}" class="btn btn-primary">Visualizar Cliete</a></td>
    </tr>
          
      @endforeach
    
   
  </tbody>
</table>
</div>

@endsection