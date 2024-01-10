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
        Schema::create('closingsales', function (Blueprint $table) {
            $table->id();
            $table->string('token')->nullable();
            $table->string('quantity_sold_bread0')->nullable();
            $table->string('quantity_sold_biscut0')->nullable();
            $table->string('quantity_sold_water0')->nullable();
            $table->string('quantity_sold_lychee0')->nullable();
            $table->string('quantity_sold_milo0')->nullable();
            $table->string('quantity_sold_soy0')->nullable();
            $table->string('quantity_sold_lemon0')->nullable();
            $table->string('quantity_sold_wanda0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('closingsales');
    }
};
