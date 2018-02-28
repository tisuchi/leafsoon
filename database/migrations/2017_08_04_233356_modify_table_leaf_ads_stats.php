<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTableLeafAdsStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaf_ads_stats', function (Blueprint $table) {
            $table->renameColumn('views', 'view');
            $table->renameColumn('clicks', 'click');
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
            $table->renameColumn('view', 'views');
            $table->renameColumn('click', 'clicks');
        });
    }
}
