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
        Schema::create('strategic_initiatives', function (Blueprint $table) {
            $table->id('strategic_id');
            $table->string('strategic_name', 50)->nullable(false);
            $table->unsignedBigInteger('kpi_id')->nullable(false);
            $table->foreign('kpi_id')->references('kpi_id')->on('kpis')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strategic_initiatives');
    }
};
