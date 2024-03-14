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
        Schema::create('progettos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('language_id')->constrained('languages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('environment_id')->constrained('ambientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('team_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status');
            $table->decimal('budget');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progettos');
    }
};
