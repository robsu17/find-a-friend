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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('about');
            $table->enum('age', ['puppy', 'young', 'adult']);
            $table->enum('size', ['child', 'medium', 'large']);
            $table->enum('energy', ['low', 'medium', 'high']);
            $table->enum('dependency', ['low', 'medium', 'high']);
            $table->enum('ambience', ['small', 'medium', 'large']);
            $table->json('photos')->nullable();
            $table->json('requirements');
            $table->unsignedBigInteger('org_id');
            $table->foreign('org_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
