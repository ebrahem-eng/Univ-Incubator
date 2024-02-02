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
        Schema::create('study_fees', function (Blueprint $table) {
            $table->id();
            $table->string('annualFees');
            $table->double('annualFeesNumber');
            $table->string('details');
            $table->string('annualFeesDate');
            $table->foreignId('univercityCollegeID')->references('id')->on('university_colleges');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_fees');
    }
};
