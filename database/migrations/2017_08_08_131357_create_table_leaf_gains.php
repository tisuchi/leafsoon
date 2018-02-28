<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLeafGains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaf_gains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_user_ref')->nullable();
            $table->integer('id_video');
            $table->integer('id_ads');
            $table->enum('type_gain', ['view', 'click']);
            $table->date('date_ref');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaf_gains');
    }
}
