<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = [
        'marca'
    ];

    public function veiculo(){
        return $this->belongsTo(Veiculo::class, 'id_marca', 'id');
    }
    public $timestamps = false;

}
