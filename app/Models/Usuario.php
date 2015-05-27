<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

	protected $primaryKey = 'id_usuario';

    protected $table = 'usuario';

    protected $fillable = [
        'id_usuario',
        'nome',
        'login',
        'senha'
    ];

    protected $hidden = ['senha'];
}
