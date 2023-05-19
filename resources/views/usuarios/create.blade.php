<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA_Compatible" content="ie=edge">
        <title> Cadastrar um novo usuario</title>
    </head>
    <body>
        <form action="{{ route('cadastrar_usuario') }}" method="POST">
            @csrf
            <label for="">Id</label> <br />
            <input type="text" name="id"> <br />
            <label for="">Nome</label> <br />
            <input type="text" name="nome"> <br />
            <label for="">Login</label> <br />
            <input type="text" name="login"> <br />
            <label for="">Senha</label> <br />
            <input type="text" name="senha"> <br />
            <label for="">E-mail</label> <br />
            <input type="text" name="email"> <br />
            <label for="">CPF</label> <br />
            <input type="text" name="cpf"> <br />
            <button>Salvar</button>
        </form>
    </body>
</html>