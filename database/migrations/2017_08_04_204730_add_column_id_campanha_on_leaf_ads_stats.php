<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnIdCampanhaOnLeafAdsStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaf_ads_stats', function (Blueprint $table) {
            $table->integer('id_campanha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaf_ads_stats', function (Blueprint $table) {
            $table->dropColumn('id_campanha');
        });
    }
}
