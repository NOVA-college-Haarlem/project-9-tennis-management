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
        Schema::create('membership_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('duration'); // Duration in days
            $table->enum('duration_unit', ['day', 'week', 'month', 'year']);
            $table->decimal('price', 8, 2);
            $table->integer('max_booking_days_ahead');
            $table->integer('max_booking_hours');
            $table->boolean('allow_guests')->default(false);
            $table->boolean('access_competitions')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_levels');
    }
};
