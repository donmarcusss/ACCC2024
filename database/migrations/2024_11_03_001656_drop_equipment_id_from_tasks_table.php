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
            // Drop the foreign key constraint first, if it exists
            $table->dropForeign(['equipment_id']);
            // Then drop the equipment_id column
            $table->dropColumn('equipment_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Re-add the equipment_id column
            $table->unsignedBigInteger('equipment_id')->after('id'); // Adjust the position if necessary
            // Recreate the foreign key constraint if you want to restore it
            $table->foreign('equipment_id')->references('id')->on('equipments')->onDelete('cascade');
        });
    }
};
