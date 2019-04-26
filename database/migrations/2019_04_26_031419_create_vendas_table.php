<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_veiculo')->unsigned();
            $table->boolean('roda_ligaleve')->default(false);
            $table->integer('valor_venda');

            $table->foreign('id_veiculo')->references('id')->on('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendas', function (Blueprint $table) {
            //
        });
    }
}
