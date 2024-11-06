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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 10, 2)->default(0.00);
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->decimal('down_payment', 10, 2)->default(0.00);
            $table->string('status')->default('pending'); // Example status
            $table->timestamps(); // created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_orders', function (Blueprint $table) {
            //
        });
    }
};
