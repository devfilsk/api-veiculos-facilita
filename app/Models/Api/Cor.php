<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $table = 'cores';

    protected $fillable = [
        'cor'
    ];

    public function cor(){
        return $this->belongsTo(Veiculo::class, 'id_cor', 'id');
    }
    public $timestamps = false;

}
