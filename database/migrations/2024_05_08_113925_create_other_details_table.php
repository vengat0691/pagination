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
        Schema::create('other_details', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->text('description')->nullable();
            $table->longText('story')->nullable();
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('hero_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('hero_id')->references('id')->on('heroes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_details');
    }
};
