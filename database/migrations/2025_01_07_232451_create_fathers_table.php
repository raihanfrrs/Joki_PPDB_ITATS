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
        Schema::create('fathers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nik')->unique()->nullable();
            $table->string('kk_number')->nullable();
            $table->string('name')->nullable();
            $table->string('pob')->nullable();
            $table->date('dob')->nullable();
            $table->string('education')->nullable();
            $table->string('job')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('regency')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('religion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fathers');
    }
};
