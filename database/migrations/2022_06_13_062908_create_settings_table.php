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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('welcome_message')->nullable();
            $table->string('level_one')->nullable();
            $table->string('description_one')->nullable();
            $table->string('level_second')->nullable();
            $table->string('description_second')->nullable();
            $table->string('level_third')->nullable();
            $table->string('description_third')->nullable();
            $table->string('opening_hour')->nullable();
            $table->string('closing_hour')->nullable();
            $table->string('phone')->nullable();
            $table->string('email_description')->nullable();
            $table->string('app_message')->nullable();
            $table->text('terms_and_condition')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
