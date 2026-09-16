<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('short_description')->nullable();

            $table->string('main_image')->nullable();
            $table->string('secondary_image')->nullable();

            $table->string('section_heading')->nullable();
            $table->text('section_description')->nullable();

            $table->json('features')->nullable();

            $table->string('bottom_heading')->nullable();
            $table->text('bottom_description')->nullable();

            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};