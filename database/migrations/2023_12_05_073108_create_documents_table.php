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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('document_id');
            $table->string('doc_title', 50)->nullable(false);
            $table->longText('doc_text')->nullable(false);
            $table->string('doc_type', 30)->nullable(false);
            $table->date('date_created')->nullable(false);
            $table->date('date_completed')->nullable(false);
            $table->integer('version_number')->nullable();
            $table->string('keywords', 50)->nullable();
            $table->string('doc_status', 20)->nullable();
            $table->string('access_control', 20)->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('strategic_id')->nullable(false);
            $table->foreign('strategic_id')->references('strategic_id')->on('strategic_initiatives')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
