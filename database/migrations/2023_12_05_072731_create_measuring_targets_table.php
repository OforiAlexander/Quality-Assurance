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
        Schema::create('measuring_targets', function (Blueprint $table) {
            $table->id('target_id');
            $table->string('target_name', 50)->nullable(false);
            $table->unsignedBigInteger('objective_id')->nullable(false);
            $table->foreign('objective_id')->references('objective_id')->on('objectives')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measuring_targets');
    }
};
