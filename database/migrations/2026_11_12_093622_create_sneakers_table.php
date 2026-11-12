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
        Schema::create('sneakers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('colorway');
            $table->integer('release_year');
            $table->mediumText('description')->nullable();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sneakers');
    }
};
