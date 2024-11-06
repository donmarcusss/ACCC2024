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
    Schema::table('services', function (Blueprint $table) {
        $table->dropForeign(['service_id']); // Drop foreign key constraint
        $table->dropColumn('service_id'); // Drop the column if exists
    });
}

public function down(): void
{
    Schema::table('services', function (Blueprint $table) {
        $table->unsignedBigInteger('service_id')->nullable(); // Add the column back if needed
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade'); // Add foreign key constraint if necessary
    });
}
};
