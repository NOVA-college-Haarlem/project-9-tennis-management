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
        Schema::create('youth_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('program_id')->constrained('youth_programs')->onDelete('cascade');
            $table->string('child_firstname');
            $table->string('child_lastname');
            $table->integer('child_age');
            $table->string('emergency_contact_phone');
            $table->dateTime('registration_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youth_registrations');
    }
};
