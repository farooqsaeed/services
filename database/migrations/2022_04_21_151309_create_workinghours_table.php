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
        Schema::create('workinghours', function (Blueprint $table) {
            $table->id();
            $table->string('Mon')->nullable();
            $table->string('Tues')->nullable();
            $table->string('Wed')->nullable();
            $table->string('Thur')->nullable();
            $table->string('Fri')->nullable();
            $table->string('Sat')->nullable();
            $table->string('Sun')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('workinghours');
    }
};
