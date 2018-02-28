<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaf_ads_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ads');
            $table->integer('clicks');
            $table->integer('views');
            $table->integer('impress');
            $table->date('date_ref');
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
        Schema::dropIfExists('leaf_ads_stats');
    }
}
