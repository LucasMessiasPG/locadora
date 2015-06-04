<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\UpdateRequest;
use App\Models\Usuario;

class HomeController extends Controller {

	public function index()
	{
		return view('home.index');
	}

    public function edit()
    {
        $user = Usuario::find(\Auth::user()->id_usuario);
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
