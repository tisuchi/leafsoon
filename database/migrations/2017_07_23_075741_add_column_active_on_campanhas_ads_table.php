<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnActiveOnCampanhasAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaf_campanhas_ads', function (Blueprint $table) {
            //
            $table->integer('active')->default('1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaf_campanhas_ads', function (Blueprint $table) {
            //
            $table->dropColumn('active');
        });
    }
}
