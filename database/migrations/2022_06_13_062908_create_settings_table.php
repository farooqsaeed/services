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
            $table->string('welcome_message');
            $table->string('level_one');
            $table->string('description_one');
            $table->string('level_second');
            $table->string('description_second');
            $table->string('level_third');
            $table->string('description_third');
            $table->string('opening_hour');
            $table->string('phone');
            $table->string('email_description');
            $table->string('app_message');
            $table->text('terms_and_condition');
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
