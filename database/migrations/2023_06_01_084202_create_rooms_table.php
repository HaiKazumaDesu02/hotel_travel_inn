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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number');
            $table->string('room_type');
            $table->integer('occupancy')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price');
            $table->string('floor')->nullable();
            $table->string('image_url')->nullable();
            $table->enum('status',['Available', 'Reserved', 'Occupied', 'Booked', 'Checked_out', 'Under_maintainance'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
