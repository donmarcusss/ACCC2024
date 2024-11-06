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
        // Schema::table('transactions', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('job_order_id')->constrained('job_orders')->onDelete('cascade');
        //     $table->decimal('total', 10, 2); // Total amount from job_orders
        //     $table->decimal('amount_to_be_paid', 10, 2)->nullable();
        //     $table->decimal('balance', 10, 2)->nullable();
        //     $table->decimal('down_payment', 10, 2)->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    //     Schema::table('transactions', function (Blueprint $table) {
    //         //
    //     });
    }
};
