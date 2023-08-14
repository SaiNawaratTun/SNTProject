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
        Schema::create('amenities_apartments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amenities_id')->unsigned();
            $table->bigInteger('appartment_id')->unsigned();
            $table->foreign('amenities_id')->references('id')->on('amenities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('appartment_id')->references('id')->on('apartments')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities_apartments');
    }
};
