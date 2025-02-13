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
        Schema::create('multimedia_exhibit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('multimedia_id');
            $table->unsignedBigInteger('exhibit_id');
            $table->timestamps();

            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade');
            $table->foreign('exhibit_id')->references('id')->on('exhibits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multimedia_exhibit');
    }
};
