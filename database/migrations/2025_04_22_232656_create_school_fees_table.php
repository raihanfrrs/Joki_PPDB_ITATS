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
        Schema::create('school_fees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigInteger('form');
            $table->bigInteger('development_fund');
            $table->bigInteger('education_development_donation');
            $table->bigInteger('batik_uniform');
            $table->bigInteger('scout_uniform');
            $table->bigInteger('total_fee');
            $table->year('academic_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_fees');
    }
};
