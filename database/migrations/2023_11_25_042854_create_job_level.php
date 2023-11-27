<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_level', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        
        DB::table('job_level')->insert([
            [
                'name' => 'Entry Level',
                'description' => 'fdsfhfgejhry',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Mid Level',
                'description' => 'fsdgfdh',
                'created_at' => Carbon::now() 
            ],
            [
                'name' => 'Expert Level',
                'description' => 'fsdgfdh',
                'created_at' => Carbon::now() 
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_level');
    }
};
