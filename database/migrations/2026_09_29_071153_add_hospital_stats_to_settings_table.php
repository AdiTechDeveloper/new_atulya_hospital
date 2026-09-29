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
    Schema::table('settings', function (Blueprint $table) {
        $table->string('satisfied_patients')->nullable()->after('hospital_name');
        $table->string('clinic_rooms')->nullable()->after('satisfied_patients');
        $table->string('awards_winning')->nullable()->after('clinic_rooms');
        $table->string('research_count')->nullable()->after('awards_winning');
    });
}

public function down(): void
{
    Schema::table('settings', function (Blueprint $table) {
        $table->dropColumn([
            'satisfied_patients',
            'clinic_rooms',
            'awards_winning',
            'research_count',
        ]);
    });
}
};
