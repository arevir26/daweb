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
        Schema::create('market_commodities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('market_id');
            $table->foreignId('commodity_id');
            $table->string('source')->nullable();
            $table->float('volume')->nullable();
            $table->integer('traders')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_commodities');
    }
};
