<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('sku')->unique();
            // $table->string('price');
            $table->string('category');
            /** 
             * "sub_categories" will be changed to Array. Because it can have multiple subcategories 
             * Example: Pınar Süzme Peynir
             *  Süt, Kahvaltılık (Main) > Peynir (sub) > Beyaz Peynir (sub) > Süzme Peynir (sub) */
            $table->string('sub_categories');
            $table->string('brand');
            $table->string('stock_amount');
            $table->string('stock_type');
            $table->string('net_quantity');
            $table->string('quantity_type');
            $table->string('image');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
