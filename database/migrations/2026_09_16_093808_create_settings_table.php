<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('hospital_name');
            $table->string('logo')->nullable();
            $table->string('phone');
            $table->text('address');

            $table->string('google_maps_url');   
            $table->text('google_maps_embed_url');

            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->string('youtube_url');
            $table->string('whatsapp_url');

            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->boolean('is_24_hours')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};