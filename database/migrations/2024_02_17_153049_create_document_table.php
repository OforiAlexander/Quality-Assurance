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
        Schema::create('document', function (Blueprint $table) {
            $table->id();
            $table->string('doc_title', 50);
            $table->string('doc_text');
            $table->string('doc_type', 30);
            $table->timestamps();
            $table->integer('version_number');
            $table->text('keywords');
            $table->char('doc_status', 20);
            $table->char('access_control', 20);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('strategic_id')->constrained('strategic_initiatives')->onDelete('cascade')->onUpdate('cascade');
                    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document');
    }
};
