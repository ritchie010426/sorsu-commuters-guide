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
        Schema::create('lost_found_posts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('item_description');
    $table->date('date_lost_or_found');
    $table->foreignId('location_id')->nullable()->constrained()->onDelete('set null');
    $table->string('uploader_name');
    $table->string('uploader_contact');
    $table->string('photo_path')->nullable();
    $table->enum('status', ['pending', 'approved', 'declined'])->default('pending');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_found_posts');
    }
};
