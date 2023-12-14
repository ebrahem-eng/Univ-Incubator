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
        Schema::create('l_admin_universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universityId')->references('id')->on('universities');
            $table->foreignId('ladminID')->references('id')->on('l_admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_admin_universities');
    }
};
