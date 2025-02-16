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
        Schema::create('market_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('market_name');
            $table->text('province')->nullable();
            $table->text('municipality')->nullable();
            $table->text('barangay')->nullable();
            $table->text('other_address')->nullable();
            $table->float('gps_lat')->nullable();
            $table->float('gps_long')->nullable();
            $table->text('market_admin')->nullable();
            $table->integer('personnel_count')->default(null)->nullable();
            $table->text('contact')->nullable();
            $table->integer('market_type')->nullable();
            $table->text('vendor_demographics')->nullable();
            $table->text('turn_over_rate')->nullable();
            $table->integer('management')->nullable();
            $table->time('open_hour')->nullable();
            $table->time('close_hour')->nullable();
            $table->text('peak_day')->nullable();
            $table->time('peak_hour_start')->nullable();
            $table->time('peak_hour_end')->nullable();
            $table->integer('foot_traffic', false, true)->nullable();
            $table->float('area')->nullable();
            $table->longText('remarks')->nullable();
            $table->date('date_profiled')->nullable();
            $table->date('date_updated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_infos');
    }
};
