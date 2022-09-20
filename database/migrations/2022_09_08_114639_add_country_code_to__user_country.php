<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('count_of_visits', function (Blueprint $table) {
            $table->string('countryCode')->after('country');
        });
    }

    /**
     * Reverse the migrations.
     *`
     * @return void
     */
    public function down()
    {
        Schema::table('count_of_visits', function (Blueprint $table) {
            $table->dropColumn('countryCode');
        });
    }
};
