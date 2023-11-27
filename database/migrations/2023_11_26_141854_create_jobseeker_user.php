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
        Schema::create('jobseeker_user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('national_id')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('contact_no')->unique();
            $table->text('career_objective')->nullable();
            $table->decimal('expected_salary')->nullable();
            $table->string('job_nature')->nullable();
            $table->string('job_level')->nullable();
            $table->text('education')->nullable();
            $table->string('job_category')->nullable();
            $table->string('organization_type')->nullable();
            $table->string('location')->nullable();
            $table->text('skill')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1)->comment('1=>active 2=>inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobseeker_user');
    }
};
