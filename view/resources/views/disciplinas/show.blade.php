<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veterinario</title>
</head>
<body>
    <a href="{{route('disciplinas.index')}}">Voltar</a>
    <br>
    <label>ID: </label>{{$dados['id']}}
    <br>
    <label>Nome: </label>{{$dados['nome']}}
    <br>
    <label>Carga: </label>{{$dados['carga']}}
    <br>
    <label>Curso: </label>{{$dados['curso']}}
</body>
</html>