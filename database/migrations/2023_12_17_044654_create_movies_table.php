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
            $table->unsignedBigInteger('tmdb_id')->default(0);
            $table->string('title');
            $table->text('overview');
            $table->float('popularity');
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->double('vote_average', 8, 2); // Hanya satu definisi untuk kolom 'vote_average'
            $table->string('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
