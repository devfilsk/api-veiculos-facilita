<?php

use App\Models\Api\Veiculo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo');
            $table->string('chassi');
            $table->year('ano_fabricacao');
            $table->year('ano_modelo');
            $table->string('codigo_fipe');
            $table->integer('valor');
            $table->integer('id_cor')->unsigned();
            $table->integer('id_marca')->unsigned();
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('id_cor')->references('id')->on('cores');
            $table->foreign('id_marca')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
