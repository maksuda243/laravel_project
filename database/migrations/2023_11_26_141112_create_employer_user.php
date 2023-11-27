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
        Schema::create('employer_user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no')->unique();
            $table->text('designation')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1)->comment('1=>active 2=>inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_user');
    }
};
