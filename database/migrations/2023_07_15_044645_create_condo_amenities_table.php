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
        Schema::create('condo_amenities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('condo_id')->unsigned();
            $table->bigInteger('amenities_id')->unsigned();
            $table->foreign('condo_id')->references('id')->on('condos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('amenities_id')->references('id')->on('amenities')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condo_amenities');
    }
};
