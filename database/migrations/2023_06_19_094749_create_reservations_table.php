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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->string('check_in');
            $table->string('check_in_time');
            $table->string('check_out');
            $table->string('check_out_time');
            $table->integer('adults');
            $table->integer('children');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->enum('status',['responded','not_responded'])->default('not_responded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
