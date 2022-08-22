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
        Schema::create('common_sections', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('name_ar');
            $table->text('link');
            $table->longText('details');
            $table->longText('details_ar');
            $table->string('type');  //  اعلانات الوظائف , اعلانات الأستثمارات, فعاليات الأتحاد الدولي, تسويق , ايجار الملاعب
            $table->string('type_ar');
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
        Schema::dropIfExists('common_sections');
    }
};
