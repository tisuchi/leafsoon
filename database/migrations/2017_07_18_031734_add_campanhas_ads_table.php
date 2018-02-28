<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCampanhasAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaf_campanhas_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_ads');
            $table->string('type');
            $table->integer('id_video')->nullable();
            $table->string('id_imagem')->nullable();
            $table->text('iframe')->nullable();
            $table->integer('id_campanha');
            $table->integer('id_place_ads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaf_campanhas_ads');
    }
}
