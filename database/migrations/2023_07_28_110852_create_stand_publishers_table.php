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
        Schema::create('stand_publishers', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->integer('time');
            $table->date('date');
            $table->unsignedBigInteger('stand_template_id');
            $table->unsignedBigInteger('user_1')->nullable();
            $table->unsignedBigInteger('user_2')->nullable();
            $table->unsignedBigInteger('user_3')->nullable();
            $table->unsignedBigInteger('user_4')->nullable();
            $table->timestamps();

            $table->foreign('stand_template_id')->references('id')->on('stand_templates');
            $table->foreign('user_1')->nullable()->references('id')->on('users');
            $table->foreign('user_2')->nullable()->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stand_publishers');
    }
};
