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
        Schema::create('competition_matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competition_id')->constrained()->onDelete('cascade');
            $table->foreignId('court_id')->constrained()->onDelete('cascade');
            $table->foreignId('team1_id')->constrained('competition_teams')->onDelete('cascade');
            $table->foreignId('team2_id')->constrained('competition_teams')->onDelete('cascade');
            $table->dateTime('scheduled_time');
            // $table->string('score')->nullable();
            $table->enum('status', ['scheduled', 'ongoing', 'completed'])->default('scheduled'); // scheduled, ongoing, completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competition_matches');
    }
};
