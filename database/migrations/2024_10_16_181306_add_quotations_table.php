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
        // Schema::create('quotations', function (Blueprint $table) {
        //     $table->id(); // Auto-incrementing ID
        //     $table->foreignId('service_id')->constrained('services', 'id')->onDelete('cascade'); // Foreign key to services table
        //     $table->foreignId('equipment_id')->constrained('equipments', 'id')->onDelete('cascade'); // Foreign key to equipments table
        //     $table->decimal('amount', 10, 2); // Example field for amount
        //     $table->timestamps(); // Created and updated timestamps
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('quotations', function (Blueprint $table) {
        //     //
        // });
    }
};
