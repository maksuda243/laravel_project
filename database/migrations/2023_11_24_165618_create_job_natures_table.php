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
        Schema::create('job_natures', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('job_natures')->insert([
            [
                'name' => 'Full Time',
                'description' => 'dsgdfhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Part Time',
                'description' => 'dsgdfhfj',
                'created_at' => Carbon::now()  
            ],[
                'name' => 'Internship',
                'description' => 'dsgdfhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Work From Home',
                'description' => 'dsgdfhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Contractual',
                'description' => 'dsgdfhfj',
                'created_at' => Carbon::now()
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_natures');
    }
};
