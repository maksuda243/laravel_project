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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('covered_area')->nullable();
            $table->timestamps();
        });

        DB::table('locations')->insert([
            [
                'name' => 'Dhaka',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Chattogram',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Barisal',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Sylhet',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Khulna',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Rajshahi',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Rangpur',
                'covered_area' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ]

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
