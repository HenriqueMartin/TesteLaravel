<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA_Compatible" content="ie=edge">
        <title> Ver Usuario</title>
    </head>
    <body>
        <form action="" method="GET">
         @csrf
        <label for="">Id</label> <br />
        <input type="text" name="id" value="{{ $usuario->id }}"> <br />
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $usuario->nome }}"> <br />
        <label for="">Login</label> <br />
        <input type="text" name="login" value="{{ $usuario->login }}"> <br />
        <label for="">Senha</label> <br />
        <input type="text" name="senha" value="{{ $usuario->senha }}"> <br />
        <label for="">E-mail</label> <br />
        <input type="text" name="email" value="{{ $usuario->email }}"> <br />
        <label for="">CPF</label> <br />
        <input type="text" name="cpf" value="{{ $usuario->cpf }}"> <br />
    </body>
</html>