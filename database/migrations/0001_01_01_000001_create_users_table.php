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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('lastname');
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('bank_acc')->unique();
            $table->timestamps();
            $table->uuid('discipline_id');
            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
