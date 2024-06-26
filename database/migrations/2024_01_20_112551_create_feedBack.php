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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable(true)->references('id')->on('users');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('subject')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('message', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**p
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
