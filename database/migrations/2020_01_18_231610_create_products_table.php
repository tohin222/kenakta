<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admin_id');
            $table->string('brand_id');
            $table->string('catagory_id');
            $table->string('title');
            $table->string('textarea');
            $table->string('quantity');
            $table->string('price');
            $table->string('offer_price');
            $table->string('status');
            $table->string('image')->default('imagestore/Screenshot_1.png');
            $table->softDeletes();
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
}
