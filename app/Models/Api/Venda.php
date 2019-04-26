<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';
    protected $fillable = [
        'id_veiculo', 'roda_ligaleve', 'valor_venda'
    ];
    public $timestamps = false;


    public function veiculo() {
        return $this->belongsTo(Veiculo::class, 'id_veiculo', 'id');
    }

    /**
     * @param  \Illuminate\Http\Request  $dados
     * @return \Illuminate\Http\Response
     */
    public function createVenda($dados){
        $valores = $dados->all();
        return $this->create($valores);
    }

}
