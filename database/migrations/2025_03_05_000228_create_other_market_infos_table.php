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
        Schema::create('other_market_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('market');
            $table->foreignId('infotype');
            $table->text('name')->nullable();
            $table->text('desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_market_infos');
    }
};
