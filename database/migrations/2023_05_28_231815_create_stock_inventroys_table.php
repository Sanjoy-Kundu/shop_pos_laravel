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
        Schema::create('stock_inventroys', function (Blueprint $table) {
            $table->id();
            $table->string('inventory_product_invoice');
            $table->string('inventory_product_name');
            $table->string('inventory_brand_name');
            $table->string('inventory_product_type');
            $table->integer('inventory_product_price');
            $table->integer('inventory_product_quantity');
            $table->integer('inventory_product_sell_quantity');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_inventroys');
    }
};
