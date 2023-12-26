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
        Schema::create('univercity_college_specializations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specializationID')->references('id')->on('specializations');
            $table->foreignId('univercityCollegeID')->references('id')->on('university_colleges');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('univercity_college_specializations');
    }
};
