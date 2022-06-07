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
        Schema::create('gaurds', function (Blueprint $table) {
            $table->id();
            $table->string('Guard_Name');
            $table->string('Guard_Email');
            $table->string('Guard_Contact');
            $table->string('Notes')->nullable();
            $table->string('property_id')->nullable();
            $table->string('status')->default('0');
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
        Schema::dropIfExists('gaurds');
    }
};
