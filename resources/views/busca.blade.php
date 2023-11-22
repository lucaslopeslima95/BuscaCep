<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Busca Cep</title>
</head>
<body>
  <h3>Busca Cep</h3>
  <form action="{{ route('buscar') }}" method="GET">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Cep:</label>
      <input type="text" name="cep" class="form-control" id="formGroupExampleInput" placeholder="CEP">
      <input type="submit" value="Enviar">
    </div>
  </form>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>