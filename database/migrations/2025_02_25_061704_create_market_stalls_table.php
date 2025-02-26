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
        Schema::create('market_stalls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('market_id');
            $table->foreignId('stall_category');
            $table->integer('stall_count')->nullable();
            $table->integer('stall_owners')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_stalls');
    }
};
