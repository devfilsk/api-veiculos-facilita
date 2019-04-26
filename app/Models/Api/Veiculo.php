<?php

namespace App\Models\Api;

use App\Models\Venda;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{

    const COMBUSTIVEL = [
        1 => 'etanol',
        2 => 'gasolina',
        3 => 'flexivel alcool/gasolina'
    ];

    protected $table = 'veiculos';
    public $timestamps = false;
    protected $fillable = [
        'modelo', 'chassi', 'ano_fabricacao', 'ano_modelo', 'codigo_fipe', 'valor', 'id_cor', 'id_marca'
    ];

    public function marca(){
        return $this->hasOne(Marca::class, 'id', 'id_marca');
    }

    public function cor(){
        return $this->hasOne(Cor::class, 'id', 'id_cor');
    }

    public function getAll(){
        return $this->where('status', true)->with('marca')->with('cor')->get();
    }

    /**
     * @param  \Illuminate\Http\Request  $dados
     * @return \Illuminate\Http\Response
     */

    public function createVeiculo($dados){
        $valores = $dados->all();
        return $this->create($valores);
    }

    /**
     * @param  \Illuminate\Http\Request  $dados
     * @return bool
     */
    public function updateVeiculo($dados) {
        $this->fill($dados->all());
        return $this->save();
    }

    //Os veículos não são deletados, e sim o status do mesmo é alterado
    public function deleteVeiculo($id){
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->status = false;
        return $veiculo->save();
    }

}
