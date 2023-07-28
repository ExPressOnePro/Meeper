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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('login')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('congregation_id');
            $table->unsignedBigInteger('groups_id');
            $table->text('mobile_phone');
            $table->text('additional_phone');
            $table->text('brief_information');
            $table->string('gender');
            $table->string('hometown');
            $table->string('languages');
            $table->string('city');
            $table->string('address');
            $table->date('birthday');
            $table->date('christening_day');
            $table->timestamp('last_login');
            $table->timestamp('registration_date');
            $table->text('user_agent');
            $table->timestamp('email_verified_at');
            $table->rememberToken();
            $table->timestamps();
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
