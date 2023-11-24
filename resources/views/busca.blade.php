@extends('base')
@section('content')
<h3>Busca Cep</h3>
  <form action="{{ route('buscar') }}" method="GET">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Cep:</label>
      <input type="text" name="cep" class="form-control" id="formGroupExampleInput" placeholder="CEP">
      <input type="submit" value="Enviar">
    </div>
</form>
@endsection
