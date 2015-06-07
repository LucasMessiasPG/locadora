<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model {

	protected $table = 'modelo';

    protected $fillable = [
        'id_modelo',
        'nome'
    ];
}
