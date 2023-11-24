@extends('base')
@section('content')
<h3>Adicionar Cep</h3>
@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<form action="{{  route('salvar') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Cep:</label>
    <input type="text" name="cep" class="form-control" id="formGroupExampleInput"  value="{{$cep}}" placeholder="CEP" required>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Rua:</label>
    <input type="text" name="logradouro" class="form-control" id="formGroupExampleInput" value="{{ $logradouro }}"  placeholder="Rua" required>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Numero:</label>
    <input type="text" name="numero" class="form-control" id="formGroupExampleInput" value=""  placeholder="Numero" required>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Bairro:</label>
    <input type="text" name="bairro" class="form-control" id="formGroupExampleInput" value="{{$bairro}}" placeholder="Bairro" required>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Cidade:</label>
    <input type="text" name="cidade" class="form-control" id="formGroupExampleInput" value="{{$localidade}}" placeholder="Cidade" required>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Estado:</label>
    <input type="text" name="estado" class="form-control" id="formGroupExampleInput" value="{{$uf}}" placeholder="Estado" required>
    <input type="submit" value="Salvar">
  </div>
</form>
@endsection
