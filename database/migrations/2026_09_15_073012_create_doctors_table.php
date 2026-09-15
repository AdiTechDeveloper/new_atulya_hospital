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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('department');
            $table->string('speciality');
            $table->string('qualification');
            $table->string('phone_number')->nullable();
            $table->string('opd_timing');
            $table->string('image')->nullable();

            // Detailed Profile Section Fields
            $table->text('about')->nullable();
            $table->json('areas_of_care')->nullable();
            $table->text('patient_care_text')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
