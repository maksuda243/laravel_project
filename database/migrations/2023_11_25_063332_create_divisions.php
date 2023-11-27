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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('divisions')->insert([
            [
                'name' => 'Dhaka',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Chattogram',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Sylhet',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Barishal',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Rangpur',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Rajshahi',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Maymensingh',
                'created_at' => Carbon::now()
            ],
            [
                
                'name' => 'Khulna',
                'created_at' => Carbon::now()
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
