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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('overview');
            $table->float('popularity');
            $table->string('poster_path');
            $table->string('backdrop_path');
            $table->string('release_date');
            $table->foreignId('category_id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};