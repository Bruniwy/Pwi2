<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stely.css">
    <title>Criar Vendedor</title>
</head>
<body>
    <form  class="cadastro" action="/criar_vendedor" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula">

        <label for="comissao">Comissão</label>
        <input type="float" name="comissao">

        <input class="button"  type="submit" value="Salvar">
    </form>
</body>
</html>