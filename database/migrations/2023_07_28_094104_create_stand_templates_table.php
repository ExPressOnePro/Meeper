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
        Schema::create('stand_templates', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['current', 'next'])->default('current');
            $table->json('week_schedule');
            $table->string('activation')->default('4-08:00');
            $table->unsignedBigInteger('stand_id');
            $table->unsignedBigInteger('congregation_id');
            $table->unsignedBigInteger('allowed_entries');
            $table->timestamps();

            $table->foreign('stand_id')->on('stands')->references('id');
            $table->foreign('congregation_id')->on('congregations')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stand_templates');
    }
};
