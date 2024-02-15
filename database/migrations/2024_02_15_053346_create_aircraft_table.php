<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aircraft', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['Y-12','B-200','MA-600']);
            $table->string('frameno');
            $table->enum('serviceability',['FMC','PMC','NMCE','NMCL','NMCB']);
            $table->integer('fuel');
            $table->enum('metric',['kg,pound,liters']);
            $table->string('mission');
            $table->boolean('setelapsetime')->default(true);
            $table->time('elapsetime');
            $table->time('endurance');
            $table->time('etd');
            $table->string('etdfeild');
            $table->time('eta');
            $table->string('etafeild');
            $table->string('pilotgiveremark');
            $table->boolean('radarradarsurveillance')->default(false);
            $table->string('adcno');
            $table->string('captain');
            $table->string('copilot');
            $table->string('engineergiveremark');
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aircraft');
    }
};
