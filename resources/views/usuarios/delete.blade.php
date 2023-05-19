<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA_Compatible" content="ie=edge">
        <title> Excluir Usuario</title>
    </head>
    <body>
        <form action="{{ route('excluir_usuario', ['id' => $usuario->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir este usuario?</label> <br />
            <input type="text" name="nome" value="{{ $usuario->nome }}"> <br />
            <button>Sim</button>
        </form>
    </body>
</html>