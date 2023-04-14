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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->string('type_name');
           //$table->foreignId('types_relationship_id')->constrained();
            $table->foreignId('image_id')->constrained();
            //$table->foreignId('user_id')->constrained();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_types');
    }
};
