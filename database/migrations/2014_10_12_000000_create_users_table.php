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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //integer('id')->autoIncrement()->unsigned();
            $table->string('name'); //string('name', 255);
            $table->string('email')->unique(); //string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable(); //timestamp('email_verified_at')->nullable();
            $table->string('password'); //string('password', 255);
            $table->string('avatar'); //string('avatar', 255);
            $table->rememberToken(); //rememberToken();
            $table->timestamps(); //timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
