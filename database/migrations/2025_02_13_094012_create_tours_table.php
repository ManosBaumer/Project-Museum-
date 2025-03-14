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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount')->comment('Amount of exhibits in the tour');
            // $table->boolean('isfavorite');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
