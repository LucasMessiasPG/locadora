<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model {

	protected $primaryKey = 'id_cor';

    protected $table = 'cor';

    protected $fillable = [
        'id_cor',
        'nome'
    ];

}
