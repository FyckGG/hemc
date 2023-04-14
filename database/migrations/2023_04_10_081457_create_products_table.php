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
            //$table->timestamps();
            $table->string('product_name');
            $table->string('product_load_capacity');
            $table->string('product_services');
            $table->string('product_warranty');
            $table->string('product_manufacturing_period');
            $table->foreignId('product_type_id')->constrained();
            $table->foreignId('image_id')->constrained();
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
