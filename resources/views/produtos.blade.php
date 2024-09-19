
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/stely.css">
  <title>Produtos</title>
</head>
<body>
<table>
    <thead>
      <h1>Produtos</h1>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $produto)
      <tr>
        <td>{{$produto->name}}</td>
        <td>{{$produto->descricao}}</td>
        <td>R$: {{$produto->preco}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
