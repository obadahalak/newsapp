<?php

use App\Models\User;
use App\Models\Competition;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_compatitions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Competition::class)->constrained('competitions')->cascadeOnDelete()->cascadeOnUpdate();
            $table->longText('body');
            $table->text('video');
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
        Schema::dropIfExists('post_compatitions');
    }
};
