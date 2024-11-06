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
        // Schema::create('transactions', function (Blueprint $table) {
        //     $table->id(); // Auto-incrementing ID
        //     $table->foreignId('booking_id')->nullable()->constrained(bookings); // Foreign key to bookings table
        //     $table->foreignId('service_id')->nullable()->constrained(services); // Make service_id nullable
        //     $table->foreignId('equipment_id')->nullable()->constrained(equipments); // Make equipment_id nullable
        //     $table->decimal('total', 10, 2)->nullable(); // Total amount
        //     $table->decimal('balance', 10, 2)->nullable(); // Balance amount
        //     $table->decimal('down_payment', 10, 2)->nullable(); // Down payment (newly added)
        //     $table->enum('mode_of_payment', ['cash', 'credit_card', 'debit_card', 'online'])->nullable(); // Payment modes
        //     $table->enum('status', ['pending', 'completed', 'canceled'])->nullable(); // Transaction status
        //     $table->string('proof_of_payment')->nullable(); // File path or URL for proof of payment
        //     $table->timestamps(); // Created and updated timestamps
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('transactions', function (Blueprint $table) {
        //     //
        // });
    }
};
