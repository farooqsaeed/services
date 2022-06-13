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
        Schema::create('contractor_auto_forwardings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('target_group');
            $table->string('job_type');
            $table->string('action');
            $table->string('selected_day');
            $table->string('selected_time');
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
        Schema::dropIfExists('contractor_auto_forwardings');
    }
};
