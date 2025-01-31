<?php

use App\Models\Custodian;
use App\Models\Father;
use App\Models\Mother;
use App\Models\Registration;
use App\Models\User;
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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(Father::class)->nullable();
            $table->foreignIdFor(Mother::class)->nullable();
            $table->foreignIdFor(Custodian::class)->nullable();
            $table->foreignIdFor(User::class);
            $table->string('nisn')->unique();
            $table->string('nik')->nullable();
            $table->string('name');
            $table->string('religion')->nullable();
            $table->string('hobby')->nullable();
            $table->string('goal')->nullable();
            $table->string('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('regency')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('kk_number')->nullable();
            $table->string('pob')->nullable();
            $table->date('dob')->nullable();
            $table->year('school_year')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
