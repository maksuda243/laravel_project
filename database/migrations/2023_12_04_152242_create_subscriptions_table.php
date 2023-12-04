<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('duration');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        DB::table('subscriptions')->insert([
            [
                'name' => 'Basic',
                'description' => "Sort matching CVs, short-list, interview scheduling through convenient employer's panel.",
                'duration' => '1',
                'price' => '2950.00',
                'created_at' => Carbon::now()
            ],[
                'name' => 'Premium',
                'description' => "Jobs displayed in the Category/Classified section with Logo and different background-color.",
                'duration' => '1',
                'price' => '4300.00',
                'created_at' => Carbon::now()
            ],[
                'name' => 'GovernPlatinumment',
                'description' => "Display your company logo and position name on the homepage of bdjobs.com. Customized web page for your job circular. 10 days display in the Hot Jobs section, then in the classified section up to 30 days as Stand-out jobs",
                'duration' => '1',
                'price' => 'sdfdhfj',
                'created_at' => Carbon::now()
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
