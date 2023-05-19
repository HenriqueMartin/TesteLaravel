<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        Usuario::create([ 
            
            'id' => $request->id,
            'nome' =>$request->nome,
            'login' =>$request->login,
            'senha' =>$request->senha,
            'email' =>$request->email,
            'cpf' =>$request->cpf,
           ]);
    
           return "Usuario Cadastrado com Sucesso";
    }
    public function show($id) /*Criando a funcao show para ver o Id */
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', ['usuario' =>$usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'login' => $request->login,
            'senha' => $request->senha,
            'email' => $request->email,
            'cpf' => $request->cpf
        ]);

        return "Usuario Atualizado com Sucesso!";
    }

    public function delete($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.delete', ['usuario' => $usuario]);
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return "Usuario Excluido com Sucesso";
    }
    
    
}
