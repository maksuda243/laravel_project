<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
            $table->string('identity',30)->unique();
            $table->timestamps();
        });
        DB::table('roles')->insert([
            [
                'name' => 'Adiyat',
                'identity' => 'Superadmin',
                'created_at' => Carbon::now()
            ],[
                'name' => '	Jawaad',
                'identity' => 'Admin',
                'created_at' => Carbon::now()
            ],[
                'name' => '	Shifa',
                'identity' => 'Manager',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Aarham',
                'identity' => 'salesman',
                'created_at' => Carbon::now()
            ]
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
