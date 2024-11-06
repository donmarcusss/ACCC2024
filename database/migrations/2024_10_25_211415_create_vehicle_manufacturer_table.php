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
        Schema::create('vehicle_manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer'); // Name of the manufacturer
            $table->foreignId('vehicle_type_id')->constrained('vehicle_types')->onDelete('cascade'); // Foreign key with cascading delete
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_manufacturer');
    }
};
