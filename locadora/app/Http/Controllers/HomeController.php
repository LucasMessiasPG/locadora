<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\UpdateRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller {

	public function index()
	{
		return view('home.index');
	}

    public function edit($id_usuario = false)
    {
        if(!$id_usuario)
            $user = Usuario::find(\Auth::user()->id_usuario);
        else
            $user = Usuario::find($id_usuario);

        if(!$user)
            return redirect()->route('painel.index')->withErrors('Este usuário não existe!');

        return view('home.edit',compact('user'));
    }

    public function update(UpdateRequest $request)
    {

        $user = Usuario::find(\Auth::user()->id_usuario);
        $post = $request->only('nome','senha');

        $user->nome = $post['nome'];
        $user->senha = \Hash::make($post['senha']);
        $user->save();

        return redirect()->route('painel.index')->with('message','Usuario alterado com sucesso');

    }

}
