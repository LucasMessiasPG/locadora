<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\Usuario;

class IndexController extends Controller {


	public function index()
    {
		return view('index');
	}

    public function login(LoginRequest $request)
    {
        $inputs = $request->except('_token');

        dd($inputs);
    }

    public function registrar()
    {
        return view('registro');
    }

    public function registrarAcao(RegistroRequest $request)
    {
        $post = $request->except('_token');
        $post['senha'] = \Hash::make($post['senha']);
        Usuario::create($post);

        return redirect()->route('index');
    }

}
