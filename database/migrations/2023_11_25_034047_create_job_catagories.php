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
        Schema::create('job_catagories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        DB::table('job_catagories')->insert([
            [
                'name' => 'Accounting/Finance',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Bank/Non-Bank Fin.Institution',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Supply Chain/Procurement',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Education/Training',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Engineer/Architects',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Garments/Textile',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'HR/Org. development',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Gen Mgt/ Admin',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Design/Creative',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ],[
                'name' => 'Marketing/Sales',
                'description' => 'fgfhghuryndn',
                'created_at'=> Carbon::now()
            ]

            ]);
    
        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_catagories');
    }
};
