<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('employer_id');
            $table->string('service_type');
            $table->string('no_of_vacancies')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_categories')->nullable();
            $table->string('job_nature')->nullable();
            $table->string('job_level')->nullable();
            $table->string('organization_type')->nullable();
            $table->string('location')->nullable();
            $table->string('requirments')->nullable();
            $table->string('special_instruction')->nullable();
            $table->string('salary')->nullable();
            $table->date('application_start_date')->nullable();
            $table->date('application_deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
