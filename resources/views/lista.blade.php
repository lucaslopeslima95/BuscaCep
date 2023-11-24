@extends('base')
@section('content')
    <a href="{{ route('adicionar') }}" class="btn btn-success">Adicionar</a>
    @if(session('sucesso'))
    <div class="alert alert-success" role="alert">
        {{ session('sucesso') }}
    </div>
    @endif
    @if(session('erro'))
    <div class="alert alert-danger" role="alert">
        {{ session('erro') }}
    </div>
    @endif
<table class="table at-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cep</th>
      <th scope="col">Rua</th>
      <th scope="col">Numero</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Criado Em</th>
    </tr>
  </thead>
  <tbody>
   @foreach($enderecos as $endereco)
        <tr>
            <td>{{$endereco->id}}</td>
            <td>{{$endereco->cep}}</td>
            <td>{{$endereco->logradouro}}</td>
            <td>{{$endereco->numero}}</td>
            <td>{{$endereco->bairro}}</td>
            <td>{{$endereco->cidade}}</td>
            <td>{{$endereco->estado}}</td>
            <td>{{ (new DateTime($endereco->created_at))->format('d/m/Y H:m:s') }}</td>
        </tr>
   @endforeach
  </tbody>
</table>
@endsection
