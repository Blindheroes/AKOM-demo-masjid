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
        Schema::create('configs', function (Blueprint $table) {
            $table->string('id_config')->primary();
            $table->string('masque_name')->nullable();
            $table->string('masque_email')->nullable();
            $table->string('masque_telp')->nullable();
            $table->string('masque_address')->nullable();
            $table->string('masque_city')->nullable();
            $table->string('masque_logo')->nullable();
            $table->string('masque_banner')->nullable();
            $table->string('masque_maps_link')->nullable();
            $table->longText('masque_maps_embed_maps')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
