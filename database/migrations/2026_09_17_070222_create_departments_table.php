<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            // Basic Information
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->string('image')->nullable();

            // About Department
            $table->string('about_heading')->nullable();
            $table->longText('about_description')->nullable();

            // Services
            $table->json('services')->nullable();

            // Specialities
            $table->json('specialities')->nullable();

            // Conditions & Care Areas
            $table->json('conditions')->nullable();

            // Patient Care
            $table->string('patient_care_heading')->nullable();
            $table->longText('patient_care_description')->nullable();

            // Why Choose Our Department
            $table->json('why_choose')->nullable();

            // Ordering / Status
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};