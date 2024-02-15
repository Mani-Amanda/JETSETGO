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
            $table->time('endurance');
            $table->string('engineergiveremark');
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
