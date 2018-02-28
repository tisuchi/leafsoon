<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCpcCpmOnTableLeafCampanhaInvest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaf_campanha_invest', function (Blueprint $table) {
            $table->decimal('cpc', 5, 2)->default(20);
            $table->decimal('cpm', 5, 2)->default(20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaf_campanha_invest', function (Blueprint $table) {
                $table->dropColumn('cpc');
                $table->dropColumn('cpm');
        });
    }
}
