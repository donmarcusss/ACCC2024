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
        // Schema::create('bookings', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade')->change();
        //     $table->string('vehicle_manufacturer');
        //     $table->string('vehicle_type');
        //     $table->string('vehicle_model');
        //     $table->string('description');
        //     $table->dateTime('booking_date');
        //     $table->string('status')->default('pending');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('bookings');
    }
};
