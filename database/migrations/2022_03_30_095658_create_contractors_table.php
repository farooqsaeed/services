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
        Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('landline_no');
            $table->string('mobile_no')->unique();
            $table->string('house_no');
            $table->string('street_name');
            $table->string('town_city');
            $table->string('postal_code');
            $table->string('rate_option');
            $table->string('rate');
            $table->string('preferred_communication');
            $table->string('area_of_coverage');
            $table->string('isMobile')->default(1);
            $table->string('approved_by')->nullable();
            $table->string('Recommendation')->nullable();
            $table->string('notes')->nullable();
            $table->string('social_id');
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
        Schema::dropIfExists('contractors');
    }
};
