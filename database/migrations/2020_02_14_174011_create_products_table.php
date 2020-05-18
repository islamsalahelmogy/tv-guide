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
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedDecimal('price');
            $table->string('image')->nullable();
            $table->unsignedInteger('quantity')->default(0);
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')
            ->on('categories');

            $table->foreign('brand_id')
            ->references('id')
            ->on('brands');

            $table->foreign('seller_id')
            ->references('id')
            ->on('users');
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
