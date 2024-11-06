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
        Schema::create('my_cars', function (Blueprint $table) {
            $table->id();

             // Add foreign key for user_id referencing users table
             $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

             // Add foreign key for vehicle_id referencing vehicles table
             $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
 
             // Additional columns for car information
             $table->string('car_name'); // Car name
             $table->string('vehicle_type'); // Vehicle type (e.g., car, truck)
             $table->string('vehicle_manufacturer'); // Manufacturer of the vehicle
             $table->string('vehicle_model'); // Model of the vehicle

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_cars');
    }
};
