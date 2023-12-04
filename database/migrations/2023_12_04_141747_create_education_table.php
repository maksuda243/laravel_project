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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('education')->insert([
            [
                'name' => 'PSC / 5 Pass',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'JSC/JDC/ 8 Pass',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Secondary(S.S.C)',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Higher Secondary (H.S.C)',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Diploma',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Bachelor/ Honors',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Masters',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'PhD (Doctor of Philosophy)',
                'created_at' => Carbon::now()
            ],
            
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
