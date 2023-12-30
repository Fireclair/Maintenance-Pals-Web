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
        Schema::create('openingsales', function (Blueprint $table) {
            $table->id();
            $table->string('quantity_sold_bread')->nullable();
            $table->string('quantity_sold_biscut')->nullable();
            $table->string('quantity_sold_water')->nullable();
            $table->string('quantity_sold_lychee')->nullable();
            $table->string('quantity_sold_milo')->nullable();
            $table->string('quantity_sold_soy')->nullable();
            $table->string('quantity_sold_lemon')->nullable();
            $table->string('quantity_sold_wanda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('openingsales');
    }
};
