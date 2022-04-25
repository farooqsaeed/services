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
        Schema::create('tenant_properties', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_id');
            $table->string('property_id');
            $table->string('tenancy_start_date')
            ->nullable();
            $table->string('tenancy_last_date')->nullable();
            $table->integer('status')->default(1);
            $table->string('IsExpired')->default('1');
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
        Schema::dropIfExists('tenant_properties');
    }
};
