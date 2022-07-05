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
        Schema::create('property_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('date_carried_out');
            $table->string('renewal_date');
            $table->string('certificate_number');
            $table->string('smoke_alarm_expiry')->nullable();
            $table->string('carbon_monoxide_expiry')->nullable();
            $table->integer('property_id');
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
        Schema::dropIfExists('property_certificates');

        // https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photo_reference=&key=AIzaSyCSdrFyxyy9tqE-cEy76e4pszwI-Y1cMG0
    }
};
