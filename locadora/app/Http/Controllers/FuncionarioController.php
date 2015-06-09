<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Usuario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller {

    public function listar()
    {
        $funcionario = Usuario::get();

        return view('funcionario.listar', ['funcionarios' => $funcionario]);
    }

    public function cadastrar()
    {
        return view('funcionario.cadastrar');
    }

    public function destroy($id_usuario)
    {
        $user = Usuario::where('id_usuario', '=', $id_usuario)->first();

        if(!$user)
            return redirect()->back()->withErrors('aaaaaaaa ligerão, ta querendo burlar o sistema! hahaha...');
        elseif($user->id_usuario == \Auth::user()->id_usuario)
            return redirect()->back()->withErrors('ta loco!!! ta querendo se auto se excluir-se!');


        $user->delete();

        return redirect()->route('funcionario.listar')->with('message', 'Usuário deletado com sucesso.');
    }

}
