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
        Schema::create('gender', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('gender')->insert([
            [
                'name' => 'Male',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Female',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Others',
                'created_at' => Carbon::now()
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gender');
    }
};
