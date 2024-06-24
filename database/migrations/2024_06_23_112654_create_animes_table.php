<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('release_date')->nullable();
            $table->string('type');
            $table->decimal('rating', 3, 2)->nullable();
            $table->string('poster_url')->nullable();
            $table->string('age_rating')->nullable();
            $table->string('video_quality')->nullable();
            $table->string('director')->nullable();
            $table->string('status')->nullable();
            $table->string('country')->nullable();
            $table->string('premiere_season')->nullable();
            $table->integer('duration')->nullable();
            $table->timestamps();
        });
    }

    public function down():void{
        Schema::dropIfExists('animes');
    }

};
