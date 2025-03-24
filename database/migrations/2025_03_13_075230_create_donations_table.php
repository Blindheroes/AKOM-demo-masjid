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
        Schema::create('donations', function (Blueprint $table) {
            $table->string('id_donation')->primary();
            $table->string('type')->default('infaq');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('amount');
            $table->string('message')->nullable();
            $table->string('status')->default('pending');
            $table->string('payment_method');
            $table->string('payment_qr')->nullable();
            $table->string('payment_va')->nullable();
            $table->string('payment_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
