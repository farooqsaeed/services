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
        Schema::create('contractor_jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
            $table->integer('contractor_id');
            $table->string('approval_status')->nullable();
            $table->string('job_status')->nullable();
            $table->string('visit_date')->nullable();
            $table->string('visit_time')->nullable();
            $table->string('visit_status')->nullable();
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
        Schema::dropIfExists('contractor_jobs');
    }
};
