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
            $table->integer('employer_id');
            $table->string('service_type');
            $table->string('company_name')->nullable();
            $table->string('no_of_vacancies')->nullable();
            $table->string('job_title');
            $table->string('job_categories');
            $table->string('job_nature');
            $table->string('job_level');
            $table->string('organization_type');
            $table->string('location');
            $table->text('requirments')->nullable();
            $table->text('special_instruction')->nullable();
            $table->string('salary')->nullable();
            $table->string('image')->nullable();
            $table->date('application_start_date')->nullable();
            $table->date('application_deadline')->nullable();
            $table->integer('status')->default(0)->comment('0 pending,1 active, 2 inactive');
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
