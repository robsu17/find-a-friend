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
            $table->enum('age', ['filhote', 'jovem', 'adulto']);
            $table->enum('size', ['pequeno', 'medio', 'grande']);
            $table->enum('energy', ['baixo', 'medio', 'alto']);
            $table->enum('dependency', ['baixo', 'medio', 'alto']);
            $table->enum('ambience', ['pequeno', 'medio', 'amplo']);
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
