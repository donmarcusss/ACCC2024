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
        Schema::table('vehicle_manufacturers', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['vehicle_type_id']);

            // Then, drop the column
            $table->dropColumn('vehicle_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicle_manufacturers', function (Blueprint $table) {
            //
        });
    }
};
