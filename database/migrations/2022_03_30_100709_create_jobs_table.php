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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('case_no');
            $table->integer('property_id');
            $table->string('subject');
            $table->string('description');
            $table->string('attachment')->nullable();
            $table->string('notes');
            $table->string('address');
            $table->string('contact');
            $table->string('tenant_name');
            $table->string('status')->default('Pending');
            $table->string('category');
            $table->string('subCategory');
            $table->string('job_time');
            $table->string('job_date');
            $table->string('payment_status')
            ->default('unpaid');
            $table->string('cost')->nullable();
            $table->string('severity')
            ->default('Non-Emergency');
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
        Schema::dropIfExists('jobs');
    }
};
