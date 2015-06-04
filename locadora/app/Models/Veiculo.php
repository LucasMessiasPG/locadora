<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model {


    public $timestamps = false;

    protected $primaryKey = 'id_veiculo';

    protected $table = 'veiculo';

    protected $fillable = [
        'id_veiculo',
        'id_modelo',
        'id_cor',
        'placa',
        'ano_fabricacao',
        'ano_modelo'
    ];

}
