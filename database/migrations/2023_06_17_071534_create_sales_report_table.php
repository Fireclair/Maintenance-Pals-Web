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
        Schema::create('salesReport', function (Blueprint $table) {
            $table->id();
            $table->string('Admin_name')->nullable();
            $table->string('Total_sales');
            $table->string('Cashier_ID')->nullable();
            $table->string('Cashier_password')->nullable();
            $table->string('opening_sales_id')->nullable();
            $table->string('closing_sales_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('quantity_in')->nullable();
            $table->string('quantity_out')->nullable();
            $table->string('report_id')->nullable();
            $table->string('vendor_pricePay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesReport');
    }
};
