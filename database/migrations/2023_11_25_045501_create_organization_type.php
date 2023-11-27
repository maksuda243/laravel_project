<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
USE Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organization_type', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('organization_type')->insert([
            [
                'name' => 'Government',
                'description' => 'sdfdhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Semi Government',
                'description' => 'sdfdhfj',
                'created_at' => Carbon::now() 
            ],[
                'name' => 'NGO',
                'description' => 'sdfdhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Private Firm/Company',
                'description' => 'sdfdhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'International Agencies',
                'description' => 'sdfdhfj',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Others',
                'description' => 'sdfdhfj',
                'created_at' => Carbon::now()
            ]
            ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_type');
    }
};
