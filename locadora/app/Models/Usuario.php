<?php namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    public $timestamps = false;

	protected $primaryKey = 'id_usuario';

    protected $table = 'usuario';

    protected $fillable = [
        'id_usuario',
        'nome',
        'login',
        'senha'
    ];

    protected $hidden = ['senha'];

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function getRememberToken()
    {
        return null;
    }
    public function getRememberTokenName()
    {
        return null;
    }

    public function setRememberToken($value)
    {

    }

}
