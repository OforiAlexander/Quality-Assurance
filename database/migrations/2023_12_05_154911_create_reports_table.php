<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('center',60)->nullable(false);
            $table->string('quater',35)->nullable(false);
            $table->string('quater_year')->nullable(false);
            $table->string('strategic_focus');
            $table->string('strategic_objective')->nullable(false);
            $table->string('strategic_initiative')->nullable(false);
            $table->date('date');
            $table->string('comment_quater');
            $table->string('status')->nullable(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
