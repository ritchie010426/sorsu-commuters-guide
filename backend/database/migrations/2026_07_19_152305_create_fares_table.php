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
       Schema::create('fares', function (Blueprint $table) {
    $table->id();
    $table->foreignId('from_location_id')->constrained('locations')->onDelete('cascade');
    $table->foreignId('to_location_id')->constrained('locations')->onDelete('cascade');
    $table->enum('vehicle_type', ['tricycle', 'ejeep']);
    $table->decimal('fare_amount', 8, 2);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fares');
    }
};
