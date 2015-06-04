<?php namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Contracts\Auth\Guard;

class AuthController extends Controller {
    /**
     * the model instance
     * @var User
     */
    protected $user;
    /**
     * The Guard implementation.
     *
     * @var Authenticator
     */
    protected $auth;
    /**
     * Create a new authentication controller instance.
     *
     * @param  Authenticator  $auth
     * @return void
     */
    public function __construct(Guard $auth, Usuario $user)
    {
        $this->user = $user;
        $this->auth = $auth;
        $this->middleware('guest', ['except' => ['getLogout']]);
    }


    public function postLogin(LoginRequest $request)
    {
        if ($this->auth->attempt($request->only('login', 'password'),false))
        {
            return redirect()->route('painel.index');
        }
        return redirect('')->withErrors([
            'login' => 'Login ou Senha invalida',
        ]);
    }
    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function getLogout()
    {
        $this->auth->logout();
        return redirect('');
    }
}