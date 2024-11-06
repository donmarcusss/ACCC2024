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
        Schema::table('tasks', function (Blueprint $table) {
            // Drop foreign key constraints
            $table->dropForeign(['service_id']); // Change to your actual foreign key constraint name if different
            $table->dropForeign(['equipment_id']); // Change to your actual foreign key constraint name if different

            // Drop the service_id and equipment_id columns
            $table->dropColumn(['service_id', 'equipment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            //
        });
    }
};
