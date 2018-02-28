<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLeafGains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaf_gains', function (Blueprint $table) {
            $table->integer('qtd')->after('id')->default(0);
            $table->dropColumn('id_ads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaf_gains', function (Blueprint $table) {
            $table->dropColumn('qtd');
            $table->integer('id_ads')->after('id_video');
        });
    }
}
