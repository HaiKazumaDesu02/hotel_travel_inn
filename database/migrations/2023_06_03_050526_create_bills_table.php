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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('occupant_id');
            $table->foreign('occupant_id')->references('id')->on('occupants');
            $table->foreignId('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->decimal('discount')->default(0);
            $table->decimal('sub_total')->default(0);
            $table->decimal('total')->default(0);
            $table->enum('status',['paid','unpaid'])->default('unpaid');
            // $table->string('paid_time')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
