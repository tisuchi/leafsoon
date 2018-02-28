<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaf_campanhas', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nome');
            $table->integer('id_user');
            $table->timestamp('dt_start')->nullable();
            $table->timestamp('dt_end')->nullable();
            $table->integer('id_city')->nullable();
            $table->integer('id_region')->nullable();
            $table->integer('id_country')->nullable();
            $table->integer('status')->nullable()->default('0');
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
        Schema::dropIfExists('leaf_campanhas');
    }
}
