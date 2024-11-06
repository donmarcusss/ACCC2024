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
        Schema::table('my_cars', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['vehicle_id']);

            // Optionally, drop the vehicle_id column if needed
            $table->dropColumn('vehicle_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('my_cars', function (Blueprint $table) {
            //
        });
    }
};
