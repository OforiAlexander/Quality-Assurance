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
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('id')->uniqid();
            $table->string('title', 50)->nullable(false);
            $table->string('first_name', 25)->nullable(false);
            $table->string('middle_names', 100)->nullable();
            $table->string('last_name', 25)->nullable(false);
            $table->string('department_unit', 50)->nullable(false);
            $table->string('email', 30)->nullable(false)->unique();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
