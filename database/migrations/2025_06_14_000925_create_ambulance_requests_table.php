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
        Schema::create('ambulance_requests', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('destination');
            $table->string('ambulance_type');
            $table->date('date');
            $table->boolean('round_trip')->default(false);
            $table->string('name');
            $table->string('phone');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambulance_requests');
    }
};
